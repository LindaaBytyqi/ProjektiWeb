<?php
include_once 'userRepository.php';
include_once 'User.php';

if(isset($_POST['loginbtn'])){
    if(empty($_POST['name']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $password = $_POST['password'];
        $id = password_hash($name, PASSWORD_DEFAULT);

        $user  = new User($id,$name,null,$password,null, 0);
        $userRepository = new UserRepository();

        $userRepository->logUser($name, $password);
    }
}
?>