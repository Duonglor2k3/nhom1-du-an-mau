<?php 
    if(isset($_GET['san-pham'])){
        $VIEWNAME = 'san-pham.php';
    } else if (isset($_GET['gio-hang'])){
        $VIEWNAME = 'gio-hang.php';
    }else if (isset($_GET['chi-tiet'])){
        $VIEWNAME = 'chi-tiet.php';
    }
    else if (isset($_GET['gioi-thieu'])){
        $VIEWNAME = 'gioi-thieu.php';
    }
    else if (isset($_GET['ao-nam'])){
        $VIEWNAME = 'ao-nam.php';
    }
    else if (isset($_GET['ao-nu'])){
        $VIEWNAME = 'ao-nu.php';
    } 
    else {
        $VIEWNAME = 'home.php';
    }

    include_once "./layout.php";

?>