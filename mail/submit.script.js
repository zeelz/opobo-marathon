// Populate countries select
const countriesSelect = document.querySelector('#country')
if(countriesSelect) {
    countries.forEach((country) => {
        const option = document.createElement('option')
        option.innerHTML = country
        countriesSelect.appendChild(option)
    })
}


const messages = {
    runner: 'Thank you for registering to run at Opobo marathon 2023',
    volunteer: 'Thank you for registering to volunteer at Opobo marathon 2023',
    contact: 'Message sent. Our team would response appropriately'
}


function sendToGScript(data, messageContainer, accepted = true){
    console.log(messages[data.formType]);
    if (accepted && Object.values(data).every(s => s !== "")) {
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
            messageContainer.innerHTML = messages[data.formType]
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
}

const googleScriptURL = 'https://script.google.com/macros/s/AKfycbwkZtOkGYmO0P_JPPSPkg_cUxT_oeCEfDS852pPgYLNnjVT3xZHPo3080G7YS-6uHLuWw/exec';


document.querySelectorAll('.runnersRegForm').forEach( (element) => {
    

    element.addEventListener('submit', function(e){
        e.preventDefault()
            
        const messageContainer = e.target.querySelector('.messageContainer')

        const data = element.dataset.form != 'contact'? {
            firstName: e.target.firstName.value,
            lastName: e.target.lastName.value,
            email: e.target.email.value,
            address: e.target.address.value,
            phone:  e.target.phone.value
        } : {}

        if (element.dataset.form === 'runner') {
            data.dateInput = e.target.date.value
            data.sex = e.target.sex.value
            data.state = e.target.state.value
            data.contactPhone = e.target.contactPhone.value
            data.country = e.target.country.value
            data.raceChoice = e.target.raceChoice.value
            data.visitedOpobo =  e.target.visitedOpobo.value
            data.formType = 'runner'
        
            sendToGScript(data, messageContainer, e.target.acceptTerms.checked)

        } else if(element.dataset.form === 'volunteer') {
            data.ageRange = e.target.ageRange.value
            data.department = e.target.department.value
            data.formType = 'volunteer'

            sendToGScript(data, messageContainer)
        } else if(element.dataset.form === 'contact') {
            data.name = e.target.name.value,
            data.email = e.target.email.value,
            data.subject = e.target.subject.value,
            data.message = e.target.message.value,
            data.formType = 'contact'
            // console.log(data)
            sendToGScript(data, messageContainer)
        } else {

        }
        
        // console.log(data)
    })

})
