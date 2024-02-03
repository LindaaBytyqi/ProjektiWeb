<?php 
    include_once 'productsRepository.php';
    include_once 'Producti.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_temp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image = "" . $image_name;
        move_uploaded_file($image_temp, $image);
    } else {
        
        echo "Please choose an image file.";
        exit();
    }

    $newProduct = new Producti($id, $image, $name, $price);
    
    $productsRepository = new ProductsRepository();

    $productsRepository->insertProduct($newProduct);
}
?>

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
        <li><a href="dashboardUsers.php">Users</a></li>
        <li><a href="dashboardProducts.php">Products</a></li>
        <li><a href="logout.php"><button class="butoni-logout">Logout</button></a></li>
      </ul>
    </header>

    <h1 class="welcome-product">Products</h1>;

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label for="id">Product ID:</label>
        <input type="text" name="id" required>

        <label for="image">Product Image:</label>
        <input type="file" name="image" accept="products/images" required>
        

        <label for="name">Product Name:</label>
        <input type="text" name="name" required>

        <label for="price">Product Price:</label>
        <input type="text" name="price" required>

        <button type="submit" name="add_product">Add Product</button>
    </form>

    <br><br><br><br><br><br>

 

    <table>
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        
    </tr>
    
    <?php
        

        $productsRepository = new ProductsRepository();

        $products = $productsRepository->getAllProducts();

        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['id'] . "</td>";
            echo "<td>" . $product['name'] . "</td>";
            echo "<td>" . $product['price'] . "</td>";
            echo "<td><img src='" . $product['image'] . "' alt='" . $product['name'] . "' height='50px' width='50px'></td>";
            echo "</tr>";
        }
        
    ?>
</body>
</html>
