<<<<<<< Updated upstream

<!DOCTYPE html>
<html lang="en">
=======
<?php
require '../../dao/pdo.php';
require '../../dao/products.php';
$producs = products_select_all();
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
<h1>DANH SÁCH SẢN PHẨM</h1>
<div class="text">
<a href="index.php?add.php">Thêm mới sản phẩm</a>
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
            width: calc(100% / 5);
        }
    </style>
</head>

<body>
    <h1>DANH SÁCH SẢN PHẨM</h1>

    <div class="container">
        <table border="1">
            <div class="text">
                <a href="index.php?add.php">Thêm mới sản phẩm</a>
            </div>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>price</th>
                    <th>desc</th>
                    <th>status</th>
                    <th>type_id</th>
                    <th>quality</th>
                    <th>date</th>
                    <th>img</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($producs as $key => $produc) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $produc["name"] ?></td>
                        <td><?php echo $produc["price"] ?></td>
                        <td><?php echo $produc["desc"] ?></td>
                        <td><?php echo $produc["status"] ?></td>
                        <td><?php echo $produc["type_id"] ?></td>
                        <td><?php echo $produc["quality"] ?></td>
                        <td><?php echo $produc["date"] ?></td>
                        <td><?php echo $produc["img"] ?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $produc["id"] ?>">Update</a>
                            <a href="./delete.php?id=<?php echo $produc["id"] ?>" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

>>>>>>> Stashed changes
</html>