<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="contact.js" defer></script>
    <title>Contact Us</title>

</head>
<body>
    <nav>
        <div class ="banner">
        <ul class="nav-bar">
            <h2 class="logo">FIDANISHTJA BYTYQI</h2>
            <input type='checkbox' id='check' />
            <span class="menu">
                <li><a href="Home.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <a href="logout.php"><button class="Loginbtn">Log out</button></a>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
   
    <section class="kontakti">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
                <div class="kontakt-form">
                    <h1>Send us messages</h1>
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Name...">
                        <label style="font-size: 14px; color:black" for="Name" id="nameMsg"></label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email...">
                        <label style="font-size: 14px; color:black" for="email" id="emailMsg"></label>
                    </div>
                    <div class="form-group">
                        <input type="number" id="phonenumber" placeholder="Phone Number...">
                        <label style="font-size: 14px; color:black" for="Phone" id="phoneMsg"></label>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message"  placeholder="Message..." style="font-family: 'Poppins', sans-serif;"></textarea>
                    </div>
                        <button type="submit" id="submit" class="submitbtn" >Send message</button>
                </form>
                </div>
                <div class="kontakt-icon">
                    <img src="ccaa.png" class="fotoja">
                    <div class="shkrimi">
                        <h3>Hurry Up!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    <section class="footer">
        <div class="title-text">
            <h1>Visit Shop Today</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class='bx bx-time'></i>Monday to Friday - 9am to 9pm</p>
                <p><i class='bx bx-time'></i>Saturday and Sunday - 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Contact Us</h1>
                <p><i class='bx bxs-location-plus'></i>Adress: Kosovo, Kline-Drenoc</p>
                <p><i class='bx bxs-envelope'></i>info@fidanishtja.com</p>
                <p><i class='bx bxs-phone'></i>+383 49 763 888</p>
                <p><i class='bx bxs-phone'></i>+383 49 449 888</p>
            </div>
        </div>
    
        <div class="linqet">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-instagram'></i>
            <i class='bx bxl-youtube'></i>
        </div>
       </section>
    
</body>
</html>