<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>

</head>
<body>
    <header>
    <ul>
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="dashboard.php">Users</a></li>
          <li><a href="logout.php"><button>Logout</button></a></li>
      </ul>
    </header>

    <h1>Usser Accounts</h1>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <div class='user-row'>
                    <div class='user-info'>
                        <p>ID: {$user['id']}</p>
                        <p>Name: {$user['name']}</p>
                        <p>Email: {$user['email']}</p>
                        <p>Password: {$user['password']}</p>
                        <p>PhoneNumber: {$user['phonenumber']}</p>
                    </div>
                    <div class='user-actions'>
                        <a href='edit.php?id={$user['id']}'><button>Edit</button></a>
                        <a href='delete.php?id={$user['id']}'><button>Delete</button></a>
                        </div>
                    </div>
                    ";
                 }
                 ?>
        </table>
    </body>
    </html>
    