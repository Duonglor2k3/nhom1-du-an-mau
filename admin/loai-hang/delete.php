<?php
require '../../dao/pdo.php';
require '../../dao/categories.php';
$id = $_GET['id'];
$delelte = categories_delete($id);
header('location: index.php?btn_list');
?>