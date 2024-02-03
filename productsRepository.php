<?php 
include_once 'databaseConnection.php';

class ProductsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function insertProduct($product){

        $conn = $this->connection;

        $id = $product->getId();
        $image = $product->getImage();
        $name = $product->getName();
        $price = $product->getPrice();

        $sql = "INSERT INTO product (id,image,name,price) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$image,$name,$price]);

        echo "<script> alert('Product has been inserted successfuly!'); </script>";

    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM product WHERE id='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    function updateProduct($id,$image,$name,$price){
        $conn = $this->connection;

        $sql = "UPDATE product SET image=?, name=?, price=?, WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$image,$name,$price,$id]);

        echo "<script>alert('update was successful'); </script>";
    } 
    
    function deleteProduct($id){
        $conn = $this->connection;

        $sql = "DELETE FROM product WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    } 

    function addProductWithImage($id, $name, $image, $price, $image_temp) {
        $conn = $this->connection;

        $upload_directory = "uploads/";
        
        $image_path = $upload_directory . $image;

        move_uploaded_file($image_temp, $image_path);

        $sql = "INSERT INTO product (id, image, name, price) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $image, $name, $price]);

        echo "<script>alert('Product has been inserted successfully!'); </script>";
    }
}

?>

