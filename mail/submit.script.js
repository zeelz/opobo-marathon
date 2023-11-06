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
    runner: 'Thank you for registering to run at Opobo marathon 2024. Please expect a confirmation mail in your inbox',
    volunteer: 'Thank you for registering to volunteer at Opobo marathon 2024. Please expect a confirmation mail in your inbox',
    contact: 'Message sent. Our team would response appropriately'
}

function sendToGScript(payload, outputEl, fm, accepted){
    const btn = fm.querySelector('button')

    if (Object.values(payload).every(s => s !== "")) {
        if (!accepted) {
                responseHandler(outputEl, 'You have to accept the terms to submit')
                return null
        }

        btn.setAttribute('disabled', 'disabled')
        btn.textContent = 'Submitting...'

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
                    if (data.status === 'success') {
                        // clear fields
                        for(let i=0; i < fm.elements.length; i++) { fm.elements[i].value = ''}
                        // Output HTML response
                        responseHandler(outputEl, messages[payload.formType], 'success')
                        
                    } else if(data.status === 'emailexists') {
                        responseHandler(outputEl, data.message)
                    }

                    btn.removeAttribute('disabled')
                    btn.textContent = 'Submit'

                })
                .catch((err) => console.log(err))

        } catch(err){
            console.log(err);
        }
        
    } else {
        responseHandler(outputEl, 'All fields are required')
    }
}

const googleScriptURL = 'https://script.google.com/macros/s/AKfycbwfzISNEWI5ijmnPZICk1ELxHmfEP6xxCqYsSazbraNmWk6UUzLj6SuVwXhj9ZGA5pIlw/exec';

document
    .querySelectorAll('.runnersRegForm')
    .forEach( (fm) => {

        fm.addEventListener('submit', function(e){
            e.preventDefault()
                
            const outputEl = e.target.querySelector('.output')

            const data = fm.dataset.form != 'contact'? {
                firstName: e.target.firstName.value,
                lastName: e.target.lastName.value,
                email: e.target.email.value,
                address: e.target.address.value,
                phone:  e.target.phone.value
            } : {}

            if (fm.dataset.form === 'runner') {
                data.dateInput = e.target.date.value
                data.sex = e.target.sex.value
                data.state = e.target.state.value
                data.emergencyContact = e.target.emergencyContact.value
                data.country = e.target.country.value
                data.raceChoice = e.target.raceChoice.value
                data.visitedOpobo =  e.target.visitedOpobo.value
                data.formType = fm.dataset.form     
                sendToGScript(data, outputEl, fm, e.target.acceptTerms.checked)

            } else if(fm.dataset.form === 'volunteer') {

                // const fd = new FormData(e.target)
                // fd.forEach((v,k) => console.log(v,k))
                // for(const [k,v] of fd.entries()) {
                //     console.log(k, v);
                // }
                // return null
                
                data.ageRange = e.target.ageRange.value
                data.department = e.target.department.value
                data.tshirtSize = e.target.tshirtSize.value
                data.whyVolunteer = e.target.whyVolunteer.value
                data.visitedOpobo = e.target.visitedOpobo.value
                data.hasSocial = e.target.hasSocial.value
                data.formType = fm.dataset.form

                sendToGScript(data, outputEl, fm, e.target.consent.checked)

            } else if(fm.dataset.form === 'contact') {
                data.name = e.target.name.value,
                data.email = e.target.email.value,
                data.subject = e.target.subject.value,
                data.message = e.target.message.value,
                data.formType = 'contact'
                // console.log(data)
                sendToGScript(data, outputEl, fm)
            } else {

            }
            
            // console.log(data)
        })

    })
