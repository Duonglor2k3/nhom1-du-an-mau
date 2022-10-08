<?php 

    require '../dao/pdo.php';
    require '../dao/products.php';
    $dscate = products_select_all();
    // var_dump($dscate);
    foreach ($dscate as $loai){
        extract($loai);
        // echo '<li><a href="#">'.$price.'</a></li>';
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@700&family=Roboto+Slab:wght@400;500&family=Roboto:ital@1&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/nhom1-du-an-mau/content/css/detail/detail.css">
</head>

<body>
    <div class="container">
        <main>
            <section>
                <div class="tittle">
                    <span>Sản Phẩm</span>
                </div>
            </section>

            <section>
                <div class="main_content">
                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp2.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : <?php echo $price ?></span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp4.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp5.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp3.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp2.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp4.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp5.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>

                    <div class="content">
                        <img src="http://localhost/nhom1-du-an-mau/content/img/products/sp3.png" alt="">
                        <p>Áo Không Logo HPL-Nikita Mới Nhất 2022 Màu Xanh Ya</p>
                        <span>giá : 200.000 </span>
                    </div>
                </div>
            </section>

        </main>
        
    </div>
</body>

</html>