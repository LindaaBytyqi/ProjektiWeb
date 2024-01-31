<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Crimson+Text&family=Poppins&family=Satisfy&display=swap" rel="stylesheet">
    <script src="login.js" defer></script>
    <title>Login</title>
</head>
<body>
    <div class="logini">
        <form action="">
            <h1>Login</h1>
            <div class="boxiU">
                <input type="text" id="Username" placeholder="Username">
                <label style="color: rgb(181, 74, 181); font-family: 'Crimson Text', sans-serif; font-size: 16px;" for="Username" id="usernameMsg"></label>
            </div>
            <div class="boxiU">
                <input type="password" id="Password" placeholder="Password">
                <label style="color: rgb(181, 74, 181); font-family: 'Crimson Text', sans-serif; font-size: 16px;" for="Password" id="passwordMsg"></label>
            </div>
            <button type="submit" id="login" class="button">Login</button>
            <div class="linku-regjister">
                <p>Don't have an account?
                <a href="register.php">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>