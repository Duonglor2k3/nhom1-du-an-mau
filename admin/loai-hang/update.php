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
    <h1>Update MỚI LOẠI HÀNG</h1>
    <div class="text">
        <a href="index.php?add.php">Thêm danh sách loại</a>
        <a href="index.php?btn_list">Danh sách loại hàng</a>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Name Loại</label>
                <input type="text" name="name" id="" placeholder="name" value="<?= $sql['name'] ?>"><br>
            </div>
            <input type="submit" name="btn_update" id="" value="submit">
        </form>
    </div>
</body>

</html>