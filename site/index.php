<?php 
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
