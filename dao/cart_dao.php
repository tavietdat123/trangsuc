<?php
require_once 'pdo_dao.php';

//Gọi tất cả bảng
function cart_selectall()
{
    $sql = "SELECT * from carts";
    return pdo_query($sql);
}
function cart_selectall_user_id($id)
{
    $sql = "SELECT * from carts where user_id = '$id'";
    return pdo_query($sql);
}

//Thêm 
function cart_insert($product_id, $user_id,$size)
{
    $sql = "insert into carts (product_id, user_id,quantity)
        values(?,?,?)";
    pdo_execute($sql, $product_id, $user_id, $size);
}

function cart_update($product_id, $user_id,$size)
{
    $sql = "UPDATE carts SET quantity = $size WHERE user_id = $user_id and  product_id = $product_id";
    pdo_execute($sql);
}

//Xóa 
function cart_delete($id)
{
    $sql = "delete from carts where id = ?";
    pdo_execute($sql, $id);
}
