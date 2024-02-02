<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="register.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Crimson+Text&family=Poppins&family=Satisfy&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <div class="register">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
            <h1>Register</h1>
            <div class="box">
                Full Name <input type="text" id="name" name="name">
                <label style="color: blueviolet; font-family: 'Poppins', serif;; font-size: 14.5px;" for="name" id="nameError"></label>
            </div>
            <div class="box">
                Email <input type="email" id="email" name="email">
                <label style="color: blueviolet; font-family: 'Poppins', serif;; font-size: 14.5px;" for="email" id="emError"></label>
            </div>
            <div class="box">
                Password <input type="password" id="password" name="password">
                <label style="color: blueviolet; font-family: 'Poppins', serif;; font-size: 14.5px;" for="password" id="passError"></label>
            </div>
            <div class="box">
                Phone Number <input type="number" id="number" name="phonenumber">
                <label style="color: blueviolet; font-family: 'Poppins', serif;; font-size: 14.5px;" for="number" id="numberError"></label>
            </div>

            <button type="submit" class="button" name="registerBtn" value="register" onclick="validimi()">Register</button>
            <div class="linku-login">
                <p>Have an account?
                <a href="login.html">Log in</a>
                </p>
            </div>
        </form>
        <?php include_once 'registerController.php';?>
</body>
</html>