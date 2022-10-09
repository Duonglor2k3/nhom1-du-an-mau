<?php 

    require '../dao/pdo.php';
    require '../dao/products.php';
    $dscate = products_select_all();
    // var_dump($dscate);
    foreach ($dscate as $loai){
        extract($loai);
        echo '<li><a href="#">'.$name.'</a></li>';
    }
    // // thêm loại
    // $name = $_POST['name,price,status,type_id,quality,date'];
    // products_insert($name, $price, $desc, $status, $type_id, $quality, $date);
    $name = $_POST['name'];
    products_insert($name);
?>
<form action="products.php" method="post">
    name <input type="text" name="name" id=""> <br>
    <!-- price <input type="number" name="price" id=""> <br>
    desc <input type="text" name="desc" id=""> <br>
    status <input type="text" name="status" id=""> <br>
    type_id<input type="number" name="type_id" id=""> <br>
    quality <input type="number" name="quality" id=""> <br>
    date <input type="number" name="date" id=""> <br> -->
    Add <input type="submit" value="Add">
</form>