<?php
require_once './dao/pdo_dao.php';

//Gọi tất cả bảng
function cart_selectall()
{
    $sql = "SELECT * from cart";
    return pdo_query($sql);
}

//Thêm 
function cart_insert($product_id, $user_id)
{
    $sql = "insert into cart (product_id, user_id)
        values(?,?)";
    pdo_execute($sql, $product_id, $user_id);
}

function cart_update($id, $product_id, $user_id)
{
    $sql = "UPDATE cart SET product_id = ?, user_id = ? WHERE id = ?";
    pdo_execute($sql, $product_id, $user_id);
}

//Xóa 
function cart_delete($id)
{
    $sql = "delete from cart where id = ?";
    pdo_execute($sql, $id);
}
