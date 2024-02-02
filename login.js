var usernameRegex = /^[A-Za-z]{2,20}$/;
var passwordRegex = /^[A-Z][a-z]{2,8}[0-9]{0,3}$/;

var loginButton = document.getElementById("login");
var usernameMessage = document.getElementById("usernameMsg");
var passwordMessage = document.getElementById("passwordMsg");

loginButton.addEventListener("click", function(event) {
    var username = document.getElementById("Username").value;
    var password = document.getElementById("Password").value;

    usernameMessage.innerText = "";
    passwordMessage.innerText = "";

    if(username == "") {
        usernameMessage.innerText = "Username is required !";
        event.preventDefault();
    } else if (!usernameRegex.test(username)) {
        usernameMessage.innerText = 'Invalid username.';
        event.preventDefault();
    }

    if (password == "") {
        passwordMessage.innerText = "Password is required !";
        event.preventDefault();
    } else if (!passwordRegex.test(password)) {
        passwordMessage.innerText = 'Invalid password .';
        event.preventDefault();
    } else {
        alert('Username and Password are correct!');
    }
});