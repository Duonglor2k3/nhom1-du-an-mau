<?php 

    require '../dao/pdo.php';
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
</form>