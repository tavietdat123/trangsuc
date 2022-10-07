<?php
require_once './dao/pdo_dao.php';

//Gọi tất cả bảng
function pro_selectall()
{
    $sql = "SELECT * from products";
    return pdo_query($sql);
}

//Thêm san pham
function pro_insert($name,$price,$origin,$quantity,$image, $category_id)
{
    $sql = "insert into products (name,price,origin,quantity,image,category_id)
        values(?,?,?,?,?,?)";
    pdo_execute($sql, $name,$price,$origin,$quantity,$image, $category_id);
}

function pro_update($id,$name,$price,$origin,$quantity,$image, $category_id)
{
    $sql = "UPDATE products SET name = ?,price = ?,origin = ?,quantity = ?,image = ?,category_id = ? WHERE id = ?";
    pdo_execute($sql, $name,$price,$origin,$quantity,$image, $category_id,$id);
}

//Xóa 
function pro_delete($id)
{
    $sql = "delete from products where id = ?";
    pdo_execute($sql, $id);
}


