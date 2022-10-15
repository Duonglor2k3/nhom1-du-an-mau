<?php 
    require "../../dao/base_dao.php";
    require '../../dao/categories.php';  
  $vsc = categories_select_all();
  var_dump($vsc);
    
?>