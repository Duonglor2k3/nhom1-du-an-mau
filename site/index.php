<?php 
<<<<<<< Updated upstream
if(isset($_GET['product'])){

$VIEW_NAME = 'product.php';

}elseif(isset($_GET['detail'])){

$VIEW_NAME = 'detail.php';
}
elseif(isset($_GET['category'])){

$VIEW_NAME = 'sacategorye.php';
}
elseif(isset($_GET['login'])){

$VIEW_NAME = 'login.php';
}
elseif(isset($_GET['register'])){

$VIEW_NAME = 'register.php';
}
elseif(isset($_GET['cart'])){

$VIEW_NAME = 'cart.php';
}
else{

$VIEW_NAME = 'home.php';
}

$VIEW_NAME = 'home.php';

include_once './layout.php';
?>
=======
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

    include_once "./layout.php"

?>
>>>>>>> Stashed changes
