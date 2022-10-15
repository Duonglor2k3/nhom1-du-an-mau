<?php

require '../../dao/pdo.php';
require '../../dao/products.php';
// thêm loại
if (isset($_POST['btn_prd'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $type_id = $_POST['type_id'];
    $quality = $_POST['quality'];
    $date = $_POST['date'];
    $img = $_POST['img'];

    products_insert($name, $price, $desc, $status, $type_id, $quality, $date, $img);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            margin: 20px 0;
        }

        .text {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>THÊM MỚI SẢN PHẨM</h1>
    <a href="index.php?btn_list">DANH SÁCH SẢN PHẨM</a>
    <div class="text">
    <form action="" method="POST">
    <input type="text" name="name" id="" placeholder="name"> <br>
    <input type="number" name="price" id="" placeholder="price"> <br>
    <input type="text" name="desc" id="" placeholder="desc"> <br>
    <input type="text" name="status" id="" placeholder="status"> <br>
    <input type="number" name="type_id" id="" placeholder="type_id"> <br>
    <input type="number" name="quality" id="" placeholder="quality"> <br>
    <input type="number" name="date" id="" placeholder="date"> <br>
    <input type="text" name="img" id="" placeholder="img"> <br>
    <input type="submit" name="btn_prd" id="" value="submit">
    </form>
    </div>
</body>

</html>