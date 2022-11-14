// Populate countries select
const countriesSelect = document.querySelector('#country')
countries.forEach((country) => {
    const option = document.createElement('option')
    option.innerHTML = country
    countriesSelect.appendChild(option)
})


document.querySelector('#runnersRegForm').addEventListener('submit', function(e){

    const googleScriptURL = 'https://script.google.com/macros/s/AKfycbwkZtOkGYmO0P_JPPSPkg_cUxT_oeCEfDS852pPgYLNnjVT3xZHPo3080G7YS-6uHLuWw/exec';
    const messageContainer = document.querySelector('#messageContainer')
    const amount = 2500

    e.preventDefault()

    const data = {
        firstName: e.target.firstName.value,
        lastName: e.target.lastName.value,
        email: e.target.email.value,
        dateInput: e.target.date.value,
        sex: e.target.sex.value,
        state: e.target.state.value,
        phone: e.target.phone.value,
        contactPhone: e.target.contactPhone.value,
        address: e.target.address.value,
        country: e.target.country.value,
        raceChoice: e.target.raceChoice.value,
        visitedOpobo: e.target.visitedOpobo.value
    }

    if (e.target.acceptTerms.checked && Object.values(data).every(s => s !== "")) {
        try {

            fetch(googleScriptURL, {
                method: 'POST',
                mode: "no-cors",
                cache: "no-cache",
                headers: {
                    'Content-Type': 'application/json'
                },
                redirect: "follow",
                body: JSON.stringify(data)
            })
            .then(res => {
                // if (res.message === 'success') {
                    console.log(res)
                    // send mail
                    // mailSender.email.value = email
                    // mailSender.submit()
                // }

            })
            .catch(err => console.log(err))
        }
        catch(e){
            //
        }
        finally{
            messageContainer.classList.add('bg-success')
            messageContainer.classList.add('text-white')
            messageContainer.classList.remove('d-none')
            messageContainer.scrollIntoView()
            messageContainer.innerHTML = 'Thank you for registering for Opobo marathon 2023'
            setTimeout(() => {              
                messageContainer.classList.remove('bg-success')
                messageContainer.classList.remove('text-white')
                messageContainer.classList.add('d-none')
            }, 5000);
        }
    } else {
        messageContainer.classList.add('bg-secondary')
        messageContainer.classList.add('text-danger')
        messageContainer.classList.remove('d-none')
        messageContainer.scrollIntoView()
        messageContainer.innerHTML = 'All fields are required' 
        setTimeout(() => {           
            messageContainer.classList.remove('bg-secondary')
            messageContainer.classList.remove('text-danger')
            messageContainer.classList.add('d-none')
        }, 5000);
        
    }
})


