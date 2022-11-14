function payWithPaystack(email, amount) {
    let handler = PaystackPop.setup({
        key: 'pk_test_0337426f78356df028480c35319a44428f71883d', // Replace with your public key
        email,
        amount: amount * 100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"

        onClose: function(){
            alert('Window closed.');
        },

        callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
        }
    });

    handler.openIframe();
}

let donateAmount

document.querySelector('#donateForm').addEventListener('submit', function(e){

    const googleScriptURL = 'https://script.google.com/macros/s/AKfycbwkZtOkGYmO0P_JPPSPkg_cUxT_oeCEfDS852pPgYLNnjVT3xZHPo3080G7YS-6uHLuWw/exec';
    e.preventDefault()

    const email = e.target.email.value
    const amount = donateAmount.split(',').join('')
    // console.log(email, amount)
    payWithPaystack(email, amount)
    

})

const btns = document.querySelectorAll('#donateForm button')

btns.forEach( btn => {
    btn.addEventListener('click', e => {
        e.preventDefault()
        donateAmount = e.target.textContent
        btns.forEach( btn => btn.classList.remove('active'))
        e.target.classList.add('active')
    })
})