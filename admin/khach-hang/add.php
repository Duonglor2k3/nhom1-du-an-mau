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
<h1>THÊM MỚI KHÁCH HÀNG</h1>
<div class="text">
<a href="index.php?btn_list">Danh sách khách hàng</a>
<<<<<<< Updated upstream
=======
<?php 

    require '../../dao/pdo.php';
    require '../../dao/users.php'; 
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
    <input type="submit" name="btn_prd" id="" value="submit">
</form>

>>>>>>> Stashed changes
</div>
</body>
</html>