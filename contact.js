var nameRegex = /^[a-zA-Z]{2,25}$/;
let emailRegex = /^[a-z]+[._-]?\w+@+[a-z]+\.[a-z]{2,3}$/;
let phoneRegex = /^[0-9+()-]{2,20}$/;

var submitbtn = document.getElementById("submit");
var nameMessage = document.getElementById("nameMsg");
var emailMessage = document.getElementById("emailMsg");
var phoneMessage = document.getElementById("phoneMsg");

submitbtn.addEventListener("click", function(event) {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phonenumber").value;

    nameMessage.innerText  = "";
    emailMessage.innerText  = "";
    phoneMessage.innerText  = "";


    if (name == "") {
        nameMessage.innerText = "Name is required !";
        event.preventDefault();
    } else if (!nameRegex.test(name)) {
        nameError.textContent = "Invalid name.";
        event.preventDefault();
    }

    if (email == "") {
        emailMessage.innerText = "Email is required !";
        event.preventDefault();
    } else if (!emailRegex.test(email)) {
        emailError.textContent = "Invalid email.";
        event.preventDefault();
    }

    if (phone == "") {
        phoneMessage.innerText = "Phone number is required !";
        event.preventDefault();
    } else if (!phoneRegex.test(phone)) {
        phoneError.textContent = "Invalid phone number.";
        event.preventDefault();
    }

    else {
        alert('Message was sent !');
    }

});