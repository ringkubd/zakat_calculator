var total_step = 0;

$(document).ready(function ($) {
    // $("#sticky").sticky({ topSpacing: 50 })

    /**
     * Add new Cash In Hand Option
     */
    var counter = 2;

    $("#zk_add_another_field").click(function () {

        if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html(`
 <div class="zk-my-2 zk-animation-fade" id="textbox${ counter}">
    <div class="zk-flex zk-flex-row">
        <div class="zk-w-1/2 zk-mr-1">
            <label for="name${ counter}" class="zk-block zk-text-md zk-font-extrabold zk-text-gray-700">Name</label>
            <div class="zk-mt-1 zk-relative zk-rounded-md zk-shadow-sm">
                <input type="text" name="name[]" id="name${ counter}" class="focus:zk-ring-indigo-500 focus:zk-border-indigo-500 zk-block zk-w-full zk-pr-12 sm:zk-text-sm zk-border-gray-300 zk-rounded-md">
            </div>
        </div>
        <div class="zk-w-1/2 zk-ml-1">
            <label for="value${ counter}" class="zk-block zk-text-md zk-font-extrabold zk-text-gray-700">Value</label>
            <div class="zk-mt-1 zk-relative zk-rounded-md zk-shadow-sm">
                <div class="zk-absolute zk-inset-y-0 zk-left-0 zk-px-3 zk-flex zk-items-center zk-pointer-events-none zk-bg-gray-100 zk-rounded-l-md"><span class="zk-text-[#1B3F92] zk-sm:text-bolder">$</span>
                </div>
                <input type="text" name="value[]" id="value${ counter}" class="focus:zk-ring-indigo-500 focus:zk-border-indigo-500 zk-block zk-w-full zk-pl-9 zk-pr-12 sm:zk-text-sm zk-border-gray-300 zk-rounded-md" placeholder="0.00">
            </div>
        </div>
    </div>
</div>
`);

        newTextBoxDiv.appendTo("#TextBoxesGroup").hide().slideDown(500);


        counter++;
    });

    $("#removeButton").click(function () {
        if(counter==1){
            alert("No more textbox to remove");
            return false;
        }
        counter--;
        $("#TextBoxDiv" + counter).slideUp(500,function() {
            $(this).remove();
        });

    });


    /**
     * Add new Cash In Hand Option
     */
    var gold = 2;

    $("#zk_gold_add_another_field").click(function () {

        if(gold>10){
            alert("Only 10 textboxes allow");
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html(`
 <div class="zk-my-2 zk-animation-fade" id="goldbox${ gold}">
    <div class="zk-flex zk-flex-row">
        <div class="zk-w-1/2 zk-mr-1">
            <label for="gold_name${ gold}" class="zk-block zk-text-md zk-font-extrabold zk-text-gray-700">Name</label>
            <div class="zk-mt-1 zk-relative zk-rounded-md zk-shadow-sm">
                <input type="text" name="gold_name[]" id="gold_name${ gold}" class="focus:zk-ring-indigo-500 focus:zk-border-indigo-500 zk-block zk-w-full zk-pr-12 sm:zk-text-sm zk-border-gray-300 zk-rounded-md">
            </div>
        </div>
        <div class="zk-w-1/2 zk-ml-1">
            <label for="gold_value${ gold}" class="zk-block zk-text-md zk-font-extrabold zk-text-gray-700">Value</label>
            <div class="zk-mt-1 zk-relative zk-rounded-md zk-shadow-sm">
                <div class="zk-absolute zk-inset-y-0 zk-left-0 zk-px-3 zk-flex zk-items-center zk-pointer-events-none zk-bg-gray-100 zk-rounded-l-md"><span class="zk-text-[#1B3F92] zk-sm:text-bolder">$</span>
                </div>
                <input type="text" name="gold_value[]" id="gold_value${ gold}" class="focus:zk-ring-indigo-500 focus:zk-border-indigo-500 zk-block zk-w-full zk-pl-9 zk-pr-12 sm:zk-text-sm zk-border-gray-300 zk-rounded-md" placeholder="0.00">
            </div>
        </div>
    </div>
</div>
`);

        newTextBoxDiv.appendTo("#TextBoxesGroupGold").hide().slideDown(500);


        gold++;
    });

    $("#gold_removeButton").click(function () {
        if(gold==1){
            alert("No more textbox to remove");
            return false;
        }
        gold--;
        $("#goldbox" + gold).slideUp(500,function() {
            $(this).remove();
        });

    });





    $("#filter").click(function (e){
        e.preventDefault()
        filter('go')
    })

    var filterItems = localStorage.getItem('filter')
    if (filterItems != null){
        filterItems = JSON.parse(filterItems);
        $.each(filterItems, function (e){
            $("input[name="+e+"]").attr('checked', true)
        })
    }
    hideUnchecked()
    hideOwed()

    var localFormData =  localStorage.getItem('form_data')

    if (localFormData !== null){
        localFormData =  JSON.parse(localFormData)
        $.each(localFormData, function (index, value){
            $("input[name='"+index+"']").val(value)
        })
    }

    calculator()
    countTotalStep()

    $('.scroller').click(function(e){
        e.preventDefault()
        const app = $(this)
        $('html, body').animate({
            'scrollTop' : app.parents('section').nextAll('section:not(.hide)').position().top
        });

    });
    $('.back').click(function(e){
        e.preventDefault()
        const app = $(this)
        $('html, body').animate({
            'scrollTop' : app.parents('section').prevAll('section:not(.hide)').position().top
        });

    });


})



function scrollToNext() {
    var scrollOptions = {
        behavior: 'smooth',
        block: 'center'
    }
    var stanzas = $('section.page-container:not([style*="display: none"])')
    var currentStanza = 0;
    var i = localStorage.getItem('index_scroll') !== null ? parseInt(localStorage.getItem('index_scroll')) : 0;
    localStorage.setItem('index_scroll', 0)
    if (i >= stanzas.length) i = 0
    console.log( stanzas.next())
    stanzas.each(function (index,item) {
        stanzas.next()[i].scrollIntoView(scrollOptions)
        console.log(stanzas.next()[i], i)
        i++
        localStorage.setItem('index_scroll', i)
        console.log(currentStanza)
        return false;
    })
}

const formParam = {
    cash: {
        cash_in_hand: true,
        cash_in_bank_accounts: true
    },
    money_owed_to_me: {
        loan: true,
        money_expected_from_sale: true,
    },
    gold_and_sliver: {
        gold: true,
        silver: true
    },
    isas_and_trusts: {
        stocks_shares_isa_ctf: true,
        cash_in_isa: true
    },
    business_assets: {
        owe_receivables: true,
        owe_stock: true,
        owe_cash: true,
    },
    shares: {
        shares_bought_exclusively_to_resell_for_capital_gain: true,
        shares_bought_for_any_other_reason: true,
    },
    pension: {
        pension: true,
    },
    crypto: {
        cryptocurrency_value: true,
    },
    mortgage: {
        owe_mortgage: true
    },
    utility_bills:{
        owe_utility_bills: true
    },
    overdraft:{
        owe_overdraft: true
    },
    business_liabilities:{
        owe_business_liabilities: true
    },
    credit_card:{
        owe_credit_card: true
    },
    personal_loans:{
        owe_personal_loans: true
    }
}
// $("section:visible").SnapScroll({
//     classes:true,
//     hashes:false,
//     animateDuration:250,
//     animateTimeBuffer:100,
//     snapTop:true,
// });


function countTotalStep(){
    let own = $(".what_i_own_checkbox:checked").length
    let owe = $(".what_i_owe_checkbox:checked").length > 0 ? 1 : 0
    total_step = parseInt(own) + parseInt(owe)
    $(".total_step").text(" "+total_step)
}

function filter(goto = null){
    const data = {};
    var i = 0;
    $("#filter-form input:checked").each(function () {
        data[$(this).attr('name')] = $(this).val();
        const e = $(this).attr('name')
        $("#"+e).removeClass('hide').show(2000)
        $("#i_owe_"+e).removeClass('hide').show(2000)
        if (i==0 && goto !== null)
            window.location.replace(window.location.origin+"/#"+$(this).attr('name'))
        i++
    });
    localStorage.setItem('filter', JSON.stringify(data))
}

function hideUnchecked(){
    const data = {};
    $("#filter-form input:not(:checked)").each(function () {
        data[$(this).attr('name')] = $(this).val();
        removeFromLocalStorageAmount(formParam[$(this).attr('name')])
        console.log($(this).attr('name'))
        const name = $(this).attr('name')
        $("#"+name).addClass('hide').hide(2000)
        $("#i_owe_"+name).addClass('hide').hide(2000)
    });
}
function removeFromLocalStorageAmount(keys={}){
    let datas = localStorage.getItem('form_data')
    let newData = {}
    if (datas != null){
        datas = JSON.parse(datas)
        $.each(datas, function (key, val) {
            if (keys[key] === true){
                newData[key] = 0.00
                $("input[name='"+key+"']").val(0.00)
                console.log($("input[name='"+key+"']"))
            }else {
                newData[key] = val
            }
        })
        localStorage.setItem('form_data', JSON.stringify(newData))
    }
}

function hideOwed(){
    let what_i_owed = $(".what_i_owe_checkbox:checked").length
    if (what_i_owed === 0){
        $("#money_i_owe").hide(1000)
    }else {
        $("#money_i_owe").show(1000)
    }
    let checkedItem = $("#filter-form input:checked")
    if (checkedItem.length === 0){
        $("#display-zakat-section").hide(100)
    }else{
        $("#display-zakat-section").show(100)
    }
}



$("#filter-form input").on("click", function (){
    filter()
    hideUnchecked()
    hideOwed()
    countTotalStep()
    calculator()
})


$(".-currency").on("change", function (){
    calculator();
})

var todayNisab = parseFloat("1728.04").toFixed(2)
$(".today_nisab_is").text("RM "+todayNisab)

function calculator(){
    let i_have = 0;
    let i_owe = 0;
    let localStorageData = {}

    $(".i_have").each(function (i){
        let have =  parseFloat($(this).val())
        i_have += have != NaN ? have : 0
        localStorageData[$(this).attr('name')] = have.toFixed(2)
    })
    $(".i_owe").each(function (i){
        let owe = parseFloat($(this).val())
        i_owe += owe != NaN ? owe : 0
        localStorageData[$(this).attr('name')] = owe.toFixed(2)
    })
    let total = (i_have - i_owe).toFixed(2);
    $("#final_what_i_have").text("RM "+i_have)
    $("#what_i_have_right").text("RM "+i_have)
    $("#final_what_i_owe").text("RM "+i_owe)
    $("#what_i_owe_right").text("RM "+i_owe)
    $("#final_is_equal_to").text("RM "+total)
    $("#is_equal_to_right").text("RM "+total)
    let zakatable_amount = parseFloat(total) > todayNisab ? total : 0
    let zakat = 0;
    if (zakatable_amount > 0){
        zakat = (zakatable_amount / 100) * 2.5
    }
    $(".zakat_is").text("RM"+zakat.toFixed(2))
    $(".zakat_value").text("RM"+zakat.toFixed(2))
    localStorage.setItem('form_data', JSON.stringify(localStorageData))
    localStorage.setItem('zakat', zakat.toFixed(2))
}

