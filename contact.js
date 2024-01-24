let nameRegex = /^[a-zA-Z]{9,14}$/;
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
let phoneRegex = /^\+[0-9]{6,14}$/;
let messageRegex = /^[a-zA-Z0-9,'.;"!?]{10,50}$/;

function validimi() {
    let nameField = document.getElementById("Name");
    let emailField = document.getElementById("Email");
    let phoneField = document.getElementById("Phone");
    let messageField = document.getElementById("Message");

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
        event.preventDefault();
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