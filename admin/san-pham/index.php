<?php
    require "../../global.php";
    extract($_REQUEST);
    if(exist_param("btn_list")){
        $VIEWNAME ="list.php";
    }else{
        $VIEWNAME ="add.php";
    }
    require "../layout.php";


?>