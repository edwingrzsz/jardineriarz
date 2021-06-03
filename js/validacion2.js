const form = document.getElementById('form')
const button = document.getElementById('submit')

const email = document.getElementById('email')
const password = document.getElementById('pass')

const formIsValid = {
    email: false,
    password: false,
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
})

email.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.email = true
})