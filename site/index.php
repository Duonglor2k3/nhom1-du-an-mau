<?php 
    if(isset($_GET['san-pham'])){
        $VIEWNAME = 'san-pham.php';
    } else if (isset($_GET['gio-hang'])){
        $VIEWNAME = 'gio-hang.php';
    }else if (isset($_GET['chi-tiet'])){
        $VIEWNAME = 'chi-tiet.php';
    } 
    else {
        $VIEWNAME = 'home.php';
    }

    include_once "./layout.php"

?>