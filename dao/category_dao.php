<?php
require_once './dao/pdo_dao.php';

//Gọi tất cả bảng
function category_selectall()
{
    $sql = "SELECT * from category";
    return pdo_query($sql);
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

