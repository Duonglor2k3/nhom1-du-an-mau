<!-- 
    require "../../global.php";
    extract($_REQUEST);
    if(exist_param("btn_list")){
        $VIEWNAME ="list.php";
    }else{
        $VIEWNAME ="add.php";
    }
    include_once "../layout.php"; -->

<?php
require_once "../../dao/pdo.php";
require "../../global.php";
require_once "../../dao/categories.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $VIEWNAME = "list.php";
} elseif (isset($_POST['btn_insert'])) {
    $name = $_POST["name"];
    categories_insert($name);
    $VIEWNAME = 'list.php';
} elseif (isset($_POST['btn_update'])) {
    $id = $_GET['cate-up-id'];
    $sql = categories_select_one($id);
    $name = $_POST['name'];
    categories_update($id, $name);
    header('location: index.php?btn_list');
} else {
    $VIEWNAME = 'add.php';
}
include_once "../layout.php";
?>