calculateTotalSubTotal()

function calculateTotalSubTotal(){
    let kaffara = parseFloat(localStorage.getItem('kaffara')).toFixed(2)
    let zakat =  parseFloat(localStorage.getItem('zakat')).toFixed(2)
    zakat = isNaN(zakat) ? 0.00 : zakat
    kaffara = isNaN(kaffara) ? 0.00 : kaffara
    $(".zakat_amount").text("RM"+zakat)
    $(".my_kaffarah").text("RM"+kaffara)
    let subtotal = parseFloat(kaffara) + parseFloat(zakat)
    $(".subtotal_amount").text("RM"+ subtotal.toFixed(2))
    $(".total_amount").text("RM"+ subtotal.toFixed(2))
    $("#pay_amount").text("RM"+ subtotal.toFixed(2))
    $("#form-amount").val(subtotal.toFixed(2))

}

const zakat_equity = JSON.parse(localStorage.getItem('zakat_equity'));

$('.basket_item').each(function (){
    let name = $(this).attr('name')
    $(this).text('RM '+zakat_equity[name])
})

$(document).ready(function () {

    $("#card").on("click", function (e){
        e.preventDefault()
        $("#payment-form").attr("action", "/stripe/payment").submit()
    })
    // $("#paypal").on("click", function (e){
    //     e.preventDefault()
    //     // $("#payment-form").attr("action", "/paypal_charge.php").submit()
    //     $("#payment-form").attr("action", "https://www.sandbox.PayPal.com/cgi-bin/webscr").submit()
    // })
})
// Create a Stripe client.
var stripe = Stripe('pk_test_yfWRFkOqnHFclI3lhn7DQQcm'); // pass stripe api
// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
// var style = {
//     base: {
//         color: '#32325d',
//         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
//         fontSmoothing: 'antialiased',
//         fontSize: '16px',
//         '::placeholder': {
//             color: '#aab7c4'
//         }
//     },
//     invalid: {
//         color: '#fa755a',
//         iconColor: '#fa755a'
//     }
// };
// document.querySelector('#payment-form button')
//     .classList = 'btn btn-primary btn-block mt-4';
//
// // Create an instance of the card Element.
// var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
// card.mount('#card-element');
// Handle real-time validation errors from the card Element.
// card.addEventListener('change', function(event) {
//     var displayError = document.getElementById('card-errors');
//     if (event.error) {
//         displayError.textContent = event.error.message;
//     } else {
//         displayError.textContent = '';
//     }
// });

// // Handle form submission.
// var form = document.getElementById('payment-form');
// form.addEventListener('submit', function(event) {
//     event.preventDefault();
//
//     stripe.createToken(card).then(function(result) {
//         if (result.error) {
//             // Inform the user if there was an error.
//             var errorElement = document.getElementById('card-errors');
//             errorElement.textContent = result.error.message;
//         } else {
//             // Send the token to your server.
//             stripeTokenHandler(result.token);
//         }
//     });
// });

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}

