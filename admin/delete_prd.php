<?php 
require_once "../dao/product_dao.php";
require_once "../dao/detail_dao.php";
$id = $_GET['id'];
$getprd = pro_select_one($id);
$getdetail = detail_select_one($id);
detail_delete($id);
pro_delete($id);
unlink("../content/img/".$getprd['image']);
unlink("../content/img/".$getdetail['image1']);
unlink("../content/img/".$getdetail['image2']);
unlink("../content/img/".$getdetail['image3']);
header("location: index.php?product");