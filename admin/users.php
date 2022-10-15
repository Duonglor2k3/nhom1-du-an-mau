<?php 

    require '../../dao/pdo.php';
    require '../../dao/users.php'; 
    $dscate = users_select_all();
    // var_dump($dscate);
    if(isset($_POST['btn_prd']))
    foreach ($dscate as $loai){
        extract($loai);
        echo '<li><a href="#">'.$name.'</a>name</li>';
        echo '<li><a href="#">'.$email.'</a>email</li>';
        echo '<li><a href="#">'.$phone.'</a>phone</li>';
        echo '<li><a href="#">'.$address.'</a>address</li>';
        echo '<li><a href="#">'.$password.'</a>password</li>';
    }
    // thêm loại
    if(isset($_POST['btn_prd'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        users_insert($name, $email, $phone, $address, $password);
    }  
    
?>
<form action="" method="post">
    <input type="text" name="name" id="" placeholder="name"> <br>
    <input type="text" name="email" id="" placeholder="email"> <br>
    <input type="number" name="phone" id="" placeholder="phone"> <br>
    <input type="text" name="address" id="" placeholder="address"> <br>
    <input type="text" name="password" id="" placeholder="password"> <br>
    <!-- <input type="number" name="price" id="" placeholder="price"> <br>
    <input type="text" name="desc" id="" placeholder="desc"> <br>
    <input type="text" name="status" id="" placeholder="status"> <br>
    <input type="number" name="quality" id="" placeholder="quality"> <br>
    <input type="number" name="date" id="" placeholder="date"> <br> -->
    <input type="submit" name="btn_prd" id="" value="submit">
</form>