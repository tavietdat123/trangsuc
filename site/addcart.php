<?php 
require_once "../dao/product_dao.php";
require_once "../dao/cart_dao.php";
require_once "../dao/user_dao.php";
session_start();
$id = $_GET['id']; 
$cart = cart_selectall();
$user1 = user_selectusername($_SESSION['name'])['id'];
$size = 1;
if(isset($size) && isset($id) && isset($user1)){
    foreach($cart as $index => $value){
        if($value['product_id'] == $id  && $value['user_id'] == $user1){
           $check = true;
         $size1 =  $value['quantity'];
        }else{
            $check = false;
        }
    }
    if(isset($check) && $check){
        $size1++;
        cart_update($id, $user1,$size1);
        header("Location: index.php?cart");
        
    }else{
    cart_insert($id, $user1,$size);
    header("Location: index.php?cart");

    }
}