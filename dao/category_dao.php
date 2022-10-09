<?php
require_once 'pdo_dao.php';

//Gọi tất cả bảng
function category_selectall()
{
    $sql = "SELECT * from category";
    return pdo_query($sql);
}
function category_select_one($id)
{
    $sql = "SELECT * from category where id = $id";
    return pdo_query($pdo_query_one);
}

//Thêm 
function category_insert($name)
{
    $sql = "insert into category (name)
        values(?)";
    pdo_execute($sql, $name);
}
function category_update($id, $name)
{
    $sql = "UPDATE category SET name = ? WHERE id = ?";
    pdo_execute($sql, $name);
}

function category_delete($id)
{
    $sql = "delete from category where id = ?";
    pdo_execute($sql, $id);
}

