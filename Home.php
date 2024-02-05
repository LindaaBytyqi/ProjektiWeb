<?php
session_start();

if(!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar, Login & Register Form</title>
    <link rel = "stylesheet" href="Home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        <section id = "main">
        <div class="main-text">
            <h1>Petals of Pure Delight</h1>
            <p>Fresh & Beautiful Flowers <br>
            <p>Make a bouqet and pick up a gift qith your wishes. Deliver to any corner of the city</p>
            <a href = "product.php"> <button class="butoni-order">Order Now</button></a>
        </div>
    </section>
    </div>

    <section id="ab-section">
        <div class="title-text">
            <h1>Start Your Journey With Us</h1>
        </div>
        <div class="about-us">
            <div class="content-ab">
                <img src="pexPix.jpg">
                <div class="overlay">

                </div>
            </div>
            <div class="content-ab">
                <h2>Why Choose Us</h2>
                <p>Our flower shop selection features a wide range of fresh an,<br>beautiful flowers, tailored for every event and occasion. With <br>
                    a commitment to quality, we offer fresh flowers and designs of<br>artistic creativity. Our experienced and friendly team is ready to<br> help customers choose and personalize their 
                    their bouquets.<br>From classic roses to exotic blooms, our selection caters<br> to various tastes and preferences.<br>Choose us to bring the warmth and beauty of flowers to 
                    <br> every occasion of your life.<br></p>
                <a href="aboutus.php"><button class="butoni-about">Read More</button></a>
            </div>
        </div>
    </section>

    <section class="proo">
        <header>
            <h3 style="font-size: 40px;  color:rgb(189, 66, 66);">Latest Products</h3>
        </header>
        
        <div class="container">
           
            <div class="product">
                <img src="fv1.jpg" height="250px" width="155px" alt="Rose">
                <h4>Pink Roses</h4>
                <p class="price">$19.99-$10.00</p>
                <button class="add-to-cart">Shop now</button>
            </div>
        
            <div class="product">
                <img src="bb.jpg" height="110px" width="157px" alt="rose">
                <h4>Roses</h4>
                <p class="price">$24.99-$13.00</p>
                <button class="add-to-cart">Shop now</button>
            </div>
        
            <div class="product">
                <img src="i0.jpg" height="100px" width="155px" alt="Azalea">
                <h4>Chamomile</h4>
                <p class="price">$14.00-$8.00</p>
                <button class="add-to-cart">Shop now</button>
            </div>
        
            <div class="product">
                <img src="rose4.jpg" height="100px" width="115px" alt="erica">
                <h4>Flowers</h4>
                <p class="price">$25.00-$14.00</p>
                <button class="add-to-cart">Shop now</button>
            </div>
        
            <div class="product">
                <img src="zzz.jpg" height="90px" width="144px" alt="Sedumsparkle2">
                <h4>Flowers</h4>
                <p class="price">$17.00-$10.00</p>
                <button class="add-to-cart">Shop now</button>
            </div>
        
            <div class="product">
                <img src="ddd.webp" height="100px" width="150px" alt="tulipan">
                <h4>Tulipan</h4>
                <p class="price">$29.00-$15.00</p>
                <button class="add-to-cart">Shop now</button>
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