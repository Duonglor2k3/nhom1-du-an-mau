<?php
require '../../dao/pdo.php';
require '../../dao/users.php';
$id = $_GET['id'];
$delelte = users_delete($id);
header('location: index.php?btn_list');
?>