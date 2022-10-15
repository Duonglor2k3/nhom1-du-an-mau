<?php
require '../../dao/pdo.php';
require '../../dao/categories.php';
$category = categories_select_all();

?>
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
<h1>DANH SÁCH LOẠI HÀNG</h1>
<div class="text">
<div class="container">
        <table border="1">
            <div class="text">
                <a href="index.php?add.php">Thêm mới sản phẩm</a>
            </div>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($category as $key => $cate) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $cate["name"] ?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $cate["id"] ?>">Update</a>
                            <a href="./delete.php?id=<?php echo $cate["id"] ?>" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>