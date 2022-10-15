<?php 

    require '../dao/pdo.php';
<<<<<<< Updated upstream
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
=======
    require '../dao/categories.php'; 
    // $dscate = categories_select_all();
    // // var_dump($dscate);
    // if(isset($_POST['name']))
    // foreach ($dscate as $loai){
    //     extract($loai);
    //     echo '<li><a href="#">'.$name.'</a></li>';
    //     echo '<li><a href="#">'.$test.'</a></li>';
    // }
    // thêm loại
    if(isset($_POST['btn_prd'])){
        $name = $_POST['name'];
        $test = $_POST['test'];
        categories_insert($name, $test);
    }  
    
?>
<form action="" method="post">
    <input type="text" name="name" id="" placeholder="name"> <br>
    <input type="text" name="test" id="" placeholder="test"> <br>
    <!-- <input type="number" name="price" id="" placeholder="price"> <br>
    <input type="text" name="desc" id="" placeholder="desc"> <br>
    <input type="text" name="status" id="" placeholder="status"> <br>
    <input type="number" name="quality" id="" placeholder="quality"> <br>
    <input type="number" name="date" id="" placeholder="date"> <br> -->
    <input type="submit" name="btn_prd" id="" value="submit">
>>>>>>> Stashed changes
</form>