<?php 

    require '../dao/pdo.php';
    require '../dao/products.php';
    $dscate = products_select_all();
    var_dump($dscate);
?>