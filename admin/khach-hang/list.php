<<<<<<< Updated upstream

<!DOCTYPE html>
<html lang="en">
=======
<?php
require '../../dao/pdo.php';
require '../../dao/users.php';
$users = users_select_all();
?>
<!DOCTYPE html>
<html lang="en">

>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
<<<<<<< Updated upstream
        h1{
            margin: 20px 0;
        }
        .text{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>DANH SÁCH KHÁCH HÀNG</h1>
<div class="text">
<a href="index.php?add.php">Thêm mới khách hàng</a>
</div>
</body>
=======
        h1 {
            margin: 20px 0;
        }

        .text {
            margin-bottom: 10px;
        }

        td {
            width: calc(100% / 6);
        }
    </style>
</head> 

<body>
    <h1>DANH SÁCH Khách Hàng</h1>

    <div class="container">
        <table border="1">
            <div class="text">
                <a href="index.php?add.php">Thêm mới sản phẩm</a>
            </div>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>password</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $key => $user) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $user["name"] ?></td>
                        <td><?php echo $user["email"] ?></td>
                        <td><?php echo $user["phone"] ?></td>
                        <td><?php echo $user["address"] ?></td>
                        <td><?php echo $user["password"] ?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $user["id"] ?>">Update</a>
                            <a href="./delete.php?id=<?php echo $user["id"] ?>" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

>>>>>>> Stashed changes
</html>