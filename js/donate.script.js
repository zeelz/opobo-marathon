function payWithPaystack(email, amount) {
    let handler = PaystackPop.setup({
        key: 'pk_live_49853b01d14ce2df941d5e51fd8f8ec443d2b28d',
        email,
        amount: amount * 100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"

        onClose: function(){
            alert('Window closed.');
        },

        callback: function(response){
            // let message = 'Payment complete! Reference: ' + response.reference;
            // {
            //     "reference": "284009046",
            //     "trans": "2282496436",
            //     "status": "success",
            //     "message": "Approved",
            //     "transaction": "2282496436",
            //     "trxref": "284009046",
            //     "fallback": false,
            //     "bank": "UNITED BANK FOR AFRICA",
            //     "return": "{\"redirecturl\":\"?trxref=284009046&reference=284009046\",\"trans\":\"2282496436\",\"trxref\":\"284009046\",\"reference\":\"284009046\",\"status\":\"success\",\"message\":\"Success\",\"response\":\"Approved\",\"fallback\":false,\"bank\":\"UNITED BANK FOR AFRICA\"}",
            //     "redirecturl": "?trxref=284009046&reference=284009046"
            // }
            // console.log(response);
            $('#thankyouModal').modal('show')
        }
    });

    handler.openIframe();
}

let donateAmount

document.querySelector('#donateForm').addEventListener('submit', function(e){

    const googleScriptURL = 'https://script.google.com/macros/s/AKfycbwkZtOkGYmO0P_JPPSPkg_cUxT_oeCEfDS852pPgYLNnjVT3xZHPo3080G7YS-6uHLuWw/exec';
    e.preventDefault()

    const email = e.target.email.value
    let amount = e.target.setAmount.value
    amount = !amount? donateAmount.split(',').join('') : amount
    payWithPaystack(email, amount)
    

})

const btns = document.querySelectorAll('#donateForm button')

btns.forEach( btn => {
    btn.addEventListener('click', e => {
        e.preventDefault()
        document.querySelector('#setAmount').value = ''
        donateAmount = e.target.textContent
        btns.forEach( btn => btn.classList.remove('active'))
        e.target.classList.add('active')
    })
})
