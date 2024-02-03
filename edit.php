<?php
$userId = $_GET['id'];
include_once 'userRepository.php';
$userRepository = new UserRepository();
$user  = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        label {
            margin-bottom: 5px;
            margin-left: 5px;
        }

        input[type="submit"] {
            width: 250px;
            margin-left: 75px;
            border-radius: 2rem;
            background-color: purple;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(103, 15, 103);
        }
        @media screen and (max-width: 600px) {
            .container {
                max-width: 80%;
                padding: 10px;
            }

            input[type="submit"] {
                width: 80%;
                margin-left: 9.5%;
            }
        }
        </style>
</head>
<body>
<div class="container">
    <h3>Edit User</h3>
    <form action="" method="post">
        <label for="id">ID :</label>
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br>
        <label for="name">Name :</label> 
        <input type="text" name="name"  value="<?=$user['name']?>"> <br> 
        <label for="email">Email :</label>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> 
        <label for="password">Password :</label>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> 
        <label for="phonenumber">Phone Number :</label>
        <input type="text" name="phonenumber"  value="<?=$user['phonenumber']?>"> <br> 
        <label for="role">Role :</label>
        <input type="text" name="role"  value="<?=$user['role']?>"> <br> <br>

        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
    </div>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    $userRepository->updateUser($id,$name,$email,$password,$phonenumber);
    header("location:dashboard.php");
}

?>
