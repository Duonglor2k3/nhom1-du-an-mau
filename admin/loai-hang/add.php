<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            margin: 20px 0;
        }
        .text{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>THÊM MỚI LOẠI HÀNG</h1>
<div class="text">
<a href="index.php?btn_list">Danh sách loại hàng</a>
<<<<<<< Updated upstream
=======
<?php 

    require '../../dao/pdo.php';
    require '../../dao/categories.php'; 
    $dscate = categories_select_all();
    // thêm loại
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        categories_insert($name);
    }
?>
<form action="" method="post">
    <input type="text" name="name" id="" placeholder="name"> <br>
    <input type="submit" name="btn_prd" id="" value="submit">
</form>
>>>>>>> Stashed changes
</div>
</body>
</html>