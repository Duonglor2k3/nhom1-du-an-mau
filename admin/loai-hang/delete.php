<?php
require '../../dao/pdo.php';
require '../../dao/categories.php';
$id = $_GET['cate-id'];
header('location: index.php?btn_list');

?>