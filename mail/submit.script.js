// Populate countries select
const countriesSelect = document.querySelector('#country')
if(countriesSelect) {
    countries.forEach((country) => {
        const option = document.createElement('option')
        if (country === 'Nigeria') option.setAttribute('selected', true)
        option.innerHTML = country
        countriesSelect.appendChild(option)
    })
}

function responseHandler(container, message, status = 'failed'){
    if (status === 'success') {            
        container.classList.remove('bg-danger')
        container.classList.add('bg-success')
    } else {
        container.classList.remove('bg-success')
        container.classList.add('bg-danger')
    }
    container.classList.remove('d-none')
    container.innerHTML = message
    container.scrollIntoView()

    // remove error bar on blur of any input
    container.parentNode
        .querySelectorAll("input")
        .forEach(i => {
            i.addEventListener('blur', (e) => {
                container.classList.add('d-none')
            })
        })
}

const messages = {
    runner: 'Thank you for registering to run at Opobo marathon 2024',
    volunteer: 'Thank you for registering to volunteer at Opobo marathon 2024',
    contact: 'Message sent. Our team would response appropriately'
}

function sendToGScript(payload, messageContainer, element, accepted = true){

    if (accepted && Object.values(payload).every(s => s !== "")) {
        try {
            axios({
                url: googleScriptURL,
                method: 'POST',
                redirect: 'follow',
                headers: {
                    'Content-Type': 'text/plain;charset=utf-8'
                },
                responseType: 'json',
                data: JSON.stringify(payload)
            })
                .then(({data}) => {
                    // console.log(data)
                    if (data.status === 'success') {
                        for(let i=0; i < element.elements.length; i++) { element.elements[i].value = ''}
                        // Output HTML response
                        responseHandler(messageContainer, messages[payload.formType], 'success')
                        
                    } else if(data.status === 'emailexists') {
                        responseHandler(messageContainer, data.message)
                    }

                })
                .catch((err) => console.log(err))
        }
        catch(err){
            console.log(err);
        }
    } else {
        responseHandler(messageContainer, 'All fields are required')
        // responseHandler(messageContainer, 'Registration ')
    }
}

const googleScriptURL = 'https://script.google.com/macros/s/AKfycbyzVV114UFW3k3Q0u2k0VV6A9hRxtiSaw6wXDs_fUnx2hfIh3pWkmEO92m9BbpQ8GMD5g/exec';

document
    .querySelectorAll('.runnersRegForm')
    .forEach( (element) => {

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
                sendToGScript(data, messageContainer, element, e.target.acceptTerms.checked)

            } else if(element.dataset.form === 'volunteer') {

                // const fd = new FormData(element)
                // fd.forEach((v,k) => console.log(v,k))
                // console.log(fd);
                
                data.ageRange = e.target.ageRange.value
                data.department = e.target.department.value
                data.formType = 'volunteer'
                sendToGScript(data, messageContainer, element)

            } else if(element.dataset.form === 'contact') {
                data.name = e.target.name.value,
                data.email = e.target.email.value,
                data.subject = e.target.subject.value,
                data.message = e.target.message.value,
                data.formType = 'contact'
                // console.log(data)
                sendToGScript(data, messageContainer, element)
            } else {

            }
            
            // console.log(data)
        })

    })
