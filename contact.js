let nameRegex = /^[a-zA-Z]{2,12}$/;
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$/;
let phoneRegex = /^[0-9+]{6,14}$/;
let messageRegex = /^[a-zA-Z0-9,'.;"!?]{10,50}$/;

function validimi() {
    let nameField = document.getElementById("name");
    let emailField = document.getElementById("email");
    let phoneField = document.getElementById("phone");
    let messageField = document.getElementById("message");

    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let phoneError = document.getElementById("phoneError");
    let messageError = document.getElementById("messageError");

    nameError.textContent = '';
    emailError.textContent = '';
    phoneError.textContent = '';
    messageError.textContent = '';


    if (nameField.value == "") {
        nameError.textContent = "Filling this field is required";
        event.preventDefault();
    } else if (!nameRegex.test(nameField.value)) {
        nameError.textContent = "Invalid name";
        isValid.preventDefault();
    }

    if (emailField.value == "") {
        emailError.textContent = "Filling this field is required";
        event.preventDefault();
    } else if (!emailRegex.test(emailField.value)) {
        emailError.textContent = "Invalid email";
        event.preventDefault();
    }

    if (phoneField.value == "") {
        phoneError.textContent = "Filling this field is required";
        event.preventDefault();
    } else if (!phoneRegex.test(phoneField.value)) {
        phoneError.textContent = "Invalid phone";
        event.preventDefault();
    }

    if (messageField.value == "") {
        messageError.textContent = "Filling this field is required";
        event.preventDefault();
    } else if (!messageRegex.test(messageField.value)) {
        messageError.textContent = "Invalid message";
        event.preventDefault();
    }
}