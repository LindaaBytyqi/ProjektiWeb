<?php 
include_once 'databaseConnection.php';

class UserRepository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";

        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    function registerUser($user){

        $conn = $this->connection;

        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $phonenumber = $user->getPhoneNumber();
        
        $role = ($user->getRole() == 1) ? 1 : 0;

        $sql = "INSERT INTO user (name,email,password,phonenumber,role) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$email,$password,$phonenumber,$role]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function verifyUserCredentials($name, $password) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE name = ? AND password = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $password]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user !== false ? $user : null;
    }

    function logUser($name, $password) {
        $userRepository = new UserRepository();
        $loggedInUser = $userRepository->verifyUserCredentials($name, $password);
    
        if ($loggedInUser !== null) {
            $user = new User(
                $loggedInUser['id'],
                $loggedInUser['name'],
                $loggedInUser['email'],
                $loggedInUser['password'],
                $loggedInUser['phonenumber'],
                $loggedInUser['role'],
            );
    
            if ($user->getRole() == 1) {
                echo "<script> alert('Admin has logged in!'); </script>";
                header("Location: dashboard.php");
            } else {
                echo "<script> alert('User has logged in!'); </script>";
                header("Location: Homii.php");
            }
        } else {
            echo "<script> alert('Invalid username or password!'); </script>";
            header("Location: login.php");
        }
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$email,$password,$phonenumber){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, email=?, password=?, phonenumber=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$email,$password,$phonenumber,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function getAdminUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE role = 1";

        $statement = $conn->query($sql);
        $adminUsers = $statement->fetchAll();

        return $adminUsers;
    }

    function getSimpleUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE role = 0";

        $statement = $conn->query($sql);
        $simpleUsers = $statement->fetchAll();

        return $simpleUsers;
    }


    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

?>
