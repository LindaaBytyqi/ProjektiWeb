<?php
include_once 'userRepository.php';

$userRepository = new UserRepository();

$adminUsers = $userRepository->getAdminUsers();
$simpleUsers = $userRepository->getSimpleUsers();

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
    <header>
    <ul>
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="dashboardUser.php">Users</a></li>
          <li><a href="dashboardProducts.php">Products</a></li>
          <li><a href="logout.php"><button>Logout</button></a></li>
      </ul>
    </header>

    <h1 class="admin-acc">Admin Accounts</h1>

    <section class='admin'>
        <?php 
        foreach($adminUsers as $adminUser){
            echo 
            "
            <div class='user-row-admin''>
                <div class='user-info-admin''>
                    <p>ID: {$adminUser['id']}</p>
                    <p>Name: {$adminUser['name']}</p>
                    <p>Email: {$adminUser['email']}</p>
                    <p>Password: {$adminUser['password']}</p>
                    <p>PhoneNumber: {$adminUser['phonenumber']}</p>
                </div>
                <div class='user-actions-admin''>
                    <a href='edit.php?id={$adminUser['id']}'><button>Edit</button></a>
                    <a href='delete.php?id={$adminUser['id']}'><button>Delete</button></a>
                </div>
            </div>
            ";
        }
        ?>
    </section>

    <h1 class="user-acc">User Accounts</h1>

    <section class="simple-user">
        <?php 
        foreach($simpleUsers as $simpleUser){
                echo 
                "
                <div class='user-row'>
                    <div class='user-info'>
                        <p>ID: {$simpleUser['id']}</p>
                        <p>Name: {$simpleUser['name']}</p>
                        <p>Email: {$simpleUser['email']}</p>
                        <p>Password: {$simpleUser['password']}</p>
                        <p>PhoneNumber: {$simpleUser['phonenumber']}</p>
                    </div>
                    <div class='user-actions'>
                        <a href='edit.php?id={$simpleUser['id']}'><button>Edit</button></a>
                        <a href='delete.php?id={$simpleUser['id']}'><button>Delete</button></a>
                    </div>
                </div>
                ";
            }
        ?>
    </section>    
</body>
</html>
    