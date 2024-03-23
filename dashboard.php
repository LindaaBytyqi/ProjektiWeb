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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Dashboard</title>

</head>
<body>
<div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
      <li><a href="dashboard.html">Home</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="login.html"><button class="loginbtn">Log Out</button></a></li>
    </ul>
  </div>
  <div class="content">
      <h3>Dashboard Of Rossi BabyToys</h3>
  </div>

</body>
</html>


