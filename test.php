<?php 
    include_once '../dao/pdo.php';
    include '../dao/categories.php';
    $dscate = categories_select_all();
    var_dump($dscate);
    
?>