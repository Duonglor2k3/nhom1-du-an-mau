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
<h1>THÊM MỚI SẢN PHẨM</h1>
<div class="text">
    <form action="" method="post" enctype="mutipart/form-data">
        <label>Name</label>
        <input type="text" name="name" id=""> <BR></BR>
        <label>price</label>
        <input type="text" name="price" id=""> <BR></BR>
        <label>desc</label>
        <input type="text" name="desc" id=""> <BR></BR>
        <label>status</label>
        <input type="text" name="status" id=""> <BR></BR>
        <label>type_id</label>
        <input type="text" name="type_id" id=""> <BR></BR>
        <label>quality</label>
        <input type="text" name="quality" id=""> <BR></BR>
        <label>date</label>
        <input type="text" name="date" id=""> <BR></BR>
        <label>img</label>
        <input type="text" name="img" id=""> <BR></BR>
        <input type="submit" name="btn_product" id="">
    </form>
    <?php 
        include_once '../../dao/pdo.php';
        include_once '../../dao/products.php';
            // include '../dao/categories.php';
        if(isset($_POST['btn_product'])){
            $name = $_POST('name');
            $price = $_POST('price');
            $desc = $_POST('desc');
            $status = $_POST('status');
            $type_id = $_POST('type_id');
            $quality = $_POST('quality');
            $date = $_POST('date');
            $img = $_FILE['img']['name'];

            $sever_img = $_FILES["img"]["tmp_name"];
            $imgType = ['jpg', 'png'];
            $imgFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            $checkImg = in_array($imgFileType, $imgType);

            $imgSize = $_FILES["img"]["size"];
            product_insert($name, $price, $description, $status, $type_id,$img);

        }
    ?>
</div>
</body>
</html>