<?php
require_once 'pdo_dao.php';

//Gọi tất cả bảng
function detail_selectall()
{
    $sql = "SELECT * from detail";
    return pdo_query($sql);
}
function detail_select_one($id)
{
    $sql = "SELECT * from detail where product_id = $id";
    return pdo_query_one($sql);
}

//Thêm 
function detail_insert($weight, $typeofstone, $format, $destion, $image, $product_id)
{
    $sql = "insert into detail (weight, typeofstone, format, destion, image, product_id)
        values(?,?,?,?,?,?)";
    pdo_execute($sql, $weight, $typeofstone, $format, $destion, $image, $product_id);
}
function detail_update($id, $weight, $typeofstone, $format, $destion, $image, $product_id)
{
    $sql = "UPDATE detail SET weight = ?, typeofstone = ?, format = ?, destion = ?, image = ?, product_id = ? WHERE id = ?";
    pdo_execute($sql, $weight, $typeofstone, $format, $destion, $image, $product_id);
}

function detail_delete($id)
{
    $sql = "delete from detail where id = ?";
    pdo_execute($sql, $id);
}