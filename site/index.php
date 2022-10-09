<?php
require_once '../global.php';
session_start();
require_once "../dao/user_dao.php";
require_once "../dao/product_dao.php";
require_once "../dao/detail_dao.php";
require_once "../dao/category_dao.php";
require_once "../dao/cart_dao.php";

if(isset($_GET['product'])){

    $VIEW_NAME = 'product.php';
    $TITLE_NAME = "Sản Phẩm";
}elseif(isset($_GET['introduce'])){

    $VIEW_NAME = 'introduce.php';
    $TITLE_NAME = "Liên Hệ";

}elseif(isset($_GET['productdetail'])){

    $VIEW_NAME = 'productdetail.php';
    $TITLE_NAME = "Chi Tiết Sản Phẩm";

}elseif(isset($_GET['promotion'])){

    $VIEW_NAME = 'promotion.php';
    $TITLE_NAME = "Khuyến Mãi";

}elseif(isset($_GET['pay'])){

    $VIEW_NAME = 'pay.php';
    $TITLE_NAME = "Thanh Toán";

}elseif(isset($_GET['cart'])){

    $VIEW_NAME = 'cart.php';
    $TITLE_NAME = "Giỏ Hàng";

}
// elseif(isset($_GET['login'])){

//     $VIEW_NAME = 'login.php';
//     $TITLE_NAME = "Đăng Nhập";

// }elseif(isset($_GET['register'])){

//     $VIEW_NAME = 'register.php';
//     $TITLE_NAME = "Đăng Kí";

// }
else {
    $VIEW_NAME = 'home.php';
    $TITLE_NAME = "Trang Chủ";


}
include_once "layout.php";

?>