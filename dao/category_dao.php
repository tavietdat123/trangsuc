<?php
require_once 'pdo_dao.php';

//Gọi tất cả bảng
function category_selectall()
{
    $sql = "SELECT * from categories";
    return pdo_query($sql);
}
function category_select_one($id)
{
    $sql = "SELECT * from categories where id = $id";
    return pdo_query($sql);
}
function category_select_one1($id)
{
    $sql = "SELECT * from categories where id = $id";
    return pdo_query_one($sql);
}
//Thêm 
function category_insert($name)
{
    $sql = "insert into categories (name)
        values(?)";
    pdo_execute($sql, $name);
}
function category_update($id, $name)
{
    $sql = "UPDATE categories SET name = ? WHERE id = ?";
    pdo_execute($sql, $name,$id);
}

function category_delete($id)
{
    $sql = "delete from categories where id = ?";
    pdo_execute($sql, $id);
}

