<?php 
require '../../dao/pdo.php';
require '../../dao/categories.php';
require "../../global.php";

$id = $_GET['cate-up-id'];
$sql = categories_select_one($id);
?>
<form action="" method="post">
    <input type="text" name="name" id="" placeholder="name" value="<?= $sql['name'] ?>"><br>
    <input type="submit" name="btn_update" id="" value="submit">
</form>
<?php 
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            categories_update($id,$name);
            header('location: index.php?btn_list');
        }
?>


