<?php
$productId = $_GET['id'];
include_once 'productsRepository.php';

$productsRepository = new ProductsRepository();
$productsRepository->deleteProduct($productsId);
header("location:dashboardProducts.php");
?>