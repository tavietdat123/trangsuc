<?php
require_once '../global.php';
session_start();
require_once "../dao/user_dao.php";
require_once "../dao/product_dao.php";
require_once "../dao/detail_dao.php";
require_once "../dao/category_dao.php";
require_once "../dao/cart_dao.php";

if(!isset($_SESSION['admin'])){
   header("location: ../site/login.php");
}
if(isset($_GET['product'])){

    $VIEW_NAME = 'product.php';
    $TITLE_NAME = "Admin-Sản Phẩm";
}elseif(isset($_GET['categories'])){

    $VIEW_NAME = 'categories.php';
    $TITLE_NAME = "Admin-Danh Mục";

}elseif(isset($_GET['users'])){

    $VIEW_NAME = 'users.php';
    $TITLE_NAME = "Admin-Khách Hàng";

}elseif(isset($_GET['product_add'])){

    $VIEW_NAME = 'product_add.php';
    $TITLE_NAME = "Admin-Thêm Sản Phẩm";

}elseif(isset($_GET['product_fix'])){

    $VIEW_NAME = 'product_fix.php';
    $TITLE_NAME = "Admin-Sửa Sản Phẩm";

}elseif(isset($_GET['category_add'])){

    $VIEW_NAME = 'category_add.php';
    $TITLE_NAME = "Admin-Thêm Danh Mục";

}elseif(isset($_GET['category_fix'])){

    $VIEW_NAME = 'category_fix.php';
    $TITLE_NAME = "Admin-Sửa Danh Mục";

}elseif(isset($_GET['user_fix'])){

    $VIEW_NAME = 'user_fix.php';
    $TITLE_NAME = "Admin-Sửa Khách Hàng";

}else {
    $VIEW_NAME = 'admin.php';
    $TITLE_NAME = "Admin-Tổng Quan";


}
include_once "layout.php";


?>