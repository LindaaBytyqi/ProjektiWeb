let nameRegex = /^[A-Z][a-z]{2,8}$/;
let emailRegex = /^[a-z]+[._-]?\w+@+[a-z]+\.[a-z]{2,3}$/;
let passwordRegex = /^[A-Z][a-z]{3,6}$/;
let numberRegex = /^[0-9+]{2,8}$/;
function validimi() {
    
    let nameField = document.getElementById("name");
    let emailField = document.getElementById("email");
    let passwordField = document.getElementById("password");
    let numberField = document.getElementById("number");

    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emError");
    let passwordError = document.getElementById("passError");
    let numberError = document.getElementById("numberError");

    nameError.textContent = '';
    emError.textContent = '';
    passError.textContent = '';
    nameError.textContent = '';

    if(nameField.value == "") {
        nameError.textContent="Filling this field is required."
        event.preventDefault();
    }else if(!nameRegex.test(nameField.value)){
        nameError.textContent = 'The full name you have entered is incorrect. Try again.';
        event.preventDefault();
    }

    if(emailField.value == "") {
        emailError.textContent="Filling this field is required."
        event.preventDefault();
    } else if(!emailRegex.test(emailField.value)){
        emailError.textContent = 'The email you have entered is incorrect. Try again.';
        event.preventDefault();
    }

    if(passwordField.value == "") {
        passwordError.textContent="Filling this field is required."
        event.preventDefault();
    } else if(!passwordRegex.test(passwordField.value)){
        passwordError.textContent = 'The password you have entered is incorrect. Try again.';
        event.preventDefault();
    }

    if(numberField.value == "") {
        numberError.textContent="Filling this field is required."
        event.preventDefault();
    } else if(!numberRegex.test(numberField.value)){
        numberError.textContent = 'The phone number you have entered is incorrect. Try again.';
        event.preventDefault();
    }
}