<?php
$productId = $_GET['id'];
include_once 'productsRepository.php';

$productsRepository = new ProductsRepository();
$productsRepository->deleteProduct($productId);
header("location:dashboardProducts.php");
?>