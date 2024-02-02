<?php
include_once 'userRepository.php';
include_once 'User.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['email']) ||
    empty($_POST['password']) || empty($_POST['phonenumber'])){
        echo "Fill all fields!";
    }else{

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phonenumber= $_POST['phonenumber'];
        $id = password_hash($email, PASSWORD_DEFAULT);

        $role = ($_POST['role'] == 1) ? 1 : 0;

        $user  = new User($id,$name,$email,$password,$phonenumber, $role);
        $userRepository = new UserRepository();

        $userRepository->registerUser($user);
        header("Location:login.php");
    }
}
?>
