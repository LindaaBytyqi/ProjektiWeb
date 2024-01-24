let nameRegex = /^[A-Z][a-z]{2,8}$/;
let emailRegex = /^[a-z]+[._-]?\w+@+[a-z]+\.[a-z]{2,3}$/;
let passwordRegex = /^[A-Z][a-z]{3,6}$|^[A-Z][a-z]*([a-z]\d*){3,6}\d$/;
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

    let isValid = true;

    if(nameField.value == "") {
        nameError.textContent="Filling this field is required.";
        isValid = false;
    }else if(!nameRegex.test(nameField.value)){
        nameError.textContent = 'Incorrect full name! Try again.';
        isValid = false;
    }

    if(emailField.value == "") {
        emailError.textContent="Filling this field is required.";
        isValid = false;
    } else if(!emailRegex.test(emailField.value)){
        emailError.textContent = 'Incorrect email! Try again.';
        isValid = false;
    }

    if(passwordField.value == "") {
        passwordError.textContent="Filling this field is required."
        isValid = false;
    } else if(!passwordRegex.test(passwordField.value)){
        passwordError.textContent = 'Incorrect password! Try again.';
        isValid = false;
    }

    if(numberField.value == "") {
        numberError.textContent="Filling this field is required."
        isValid = false;
    } else if(!numberRegex.test(numberField.value)){
        numberError.textContent = 'Incorrect phone number! Try again.';
        isValid = false;
    }

    if (isValid) {
        alert('The form has been successfully filled!');
    }

    if (!isValid) {
        event.preventDefault();
    }
}