<?php
require '../../dao/pdo.php';
require '../../dao/products.php';
$id = $_GET['id'];
$delelte = products_delete($id);
header('location: index.php?btn_list');
?>