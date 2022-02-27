const BASE_GIFT = 25.0

$(document).ready(function(){
    var zakat = parseFloat(localStorage.getItem('zakat'))
    zakat = (zakat !== null ? zakat.toFixed(2) : 0)
    zakat = isNaN(zakat) ? 0.00 : zakat
    $("#zakat").val(zakat)

    $("#zakat").on("keyup", function (){
        let zakat = $(this).val()
        localStorage.setItem('zakat', zakat)
        calculateTotalSubTotal()
        var total = parseFloat(zakat) + parseFloat(kaffara)
        choose_my_zakat(total,decision)
    })


    var kaffara = parseFloat(localStorage.getItem('kaffara'))
    kaffara = (kaffara !== null ? kaffara.toFixed(2) : 0.00)
    kaffara = isNaN(kaffara) ? 0.00 : kaffara

    $("#kaffarah").val(kaffara)

    $("#kaffarah").on("keyup", function (){
        let kaffara = $(this).val()
        localStorage.setItem('kaffara', kaffara)
        calculateTotalSubTotal()
        var total = parseFloat(zakat) + parseFloat(kaffara)
        choose_my_zakat(total,decision)
    })

    calculateTotalSubTotal()

    var total = parseFloat(zakat) + parseFloat(kaffara)

    var decision = 0
    choose_my_zakat(total,decision)
    $(".how_my_zakat_is_used").on("change", function (){
        if ($(this).is(":checked")){
            decision = $(this).val()
        }
        choose_my_zakat(total,decision)
    })
})

function totalDevide(){
    var total = 0;
    $("input.percentage").each(function (){
        total += parseFloat($(this).val())
    })
    return total
}

function choose_my_zakat(total, decision){
    var initPercentage = 0
    var hardship = 54
    var housing = 27
    var education = 9
    var support = 10
    var disabled = false

    var valueList = {
        hardship: 54,
        housing: 27,
        education: 9,
        support: 10,
    }
    var totalDevide = 0
    $("input.percentage").each(function (){
        totalDevide += parseFloat($(this).val())
    })

    let storeData = localStorage.getItem('zakat_equity')
    if (storeData === null){
        storeData = {}
    }else {
        storeData = JSON.parse(storeData)
    }

    switch (decision){
        case '1':
            hardship = 25
            housing = 25
            education = 25
            support = 25
            valueList = {
                hardship: 25,
                housing: 25,
                education: 25,
                support: 25,
            }
            break
        case '2':
            hardship = 25
            housing = 25
            education = 25
            support = 25
            valueList = {
                hardship: 25,
                housing: 25,
                education: 25,
                support: 25,
            }
            break
    }

    var store = {
        hardship: 0,
        housing: 0,
        education: 0,
        support: 0,
    };
    $(".slider").each(function () {
        var container = $(this)

        var value = 0;
        switch ($(this).attr('name')){
            case 'hardship':
                value = (total / 100) * hardship
                initPercentage = hardship
                break
            case 'housing':
                value =  (total / 100) * housing
                initPercentage = housing
                break
            case 'education':
                value =  (total / 100) * education
                initPercentage = education
                break
            case 'support':
                value =  (total / 100) * support
                initPercentage = support
                break
        }

        if (totalDevide > 100){
            total = value
        }


        $(this).empty().slider({
            range: 'min',
            min: 1,
            max: total,
            value: value,
            disabled: disabled,
            change: function(event, ui) {
                let val = parseFloat(ui.value);
                let percentange = (val * 100) / total
                container.siblings('input.percentage').val(percentange.toFixed(1) +"%")
                container.siblings('div.amount').text("RM "+val)
                $(".how_my_zakat_is_used:checked").removeAttr('checked')
                $("input#illdecide").attr('checked', true)
                valueList[container.attr('name')] = val
                $('.basket_item[name="'+container.attr('name')+'"]').text("RM "+val.toFixed(2))
                store[container.attr('name')] = val.toFixed(2)
                localStorage.setItem('zakat_equity', JSON.stringify(store))
            },
            create: function( event, ui ) {
                container.siblings('input.percentage').val(initPercentage +"%")
                container.siblings('div.amount').text("RM "+value.toFixed(2))
                $('.basket_item[name="'+container.attr('name')+'"]').text("RM "+value.toFixed(2))
                store[container.attr('name')] = value.toFixed(2)
            }
        })
        localStorage.setItem('zakat_equity', JSON.stringify(store))
    })
}



function calculateTotalSubTotal(){
    let kaffara = parseFloat($("#kaffarah").val()).toFixed(2)
    let zakat = parseFloat($("#zakat").val()).toFixed(2)
    $(".zakat_amount").text("RM "+zakat)
    $(".my_kaffarah").text("RM "+kaffara)
    let subtotal = parseFloat(kaffara) + parseFloat(zakat)
    $(".subtotal_amount").text("RM "+ subtotal.toFixed(2))
    $(".total_amount").text("RM "+ subtotal.toFixed(2))
}