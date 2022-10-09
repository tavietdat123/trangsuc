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
function detail_insert($weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id)
{
    $sql = "insert into detail (weight, typeofstone, format, description, image1, image2, image3, product_id)
        values(?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id);
}
function detail_update($id, $weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id)
{
    $sql = "UPDATE detail SET weight = ?, typeofstone = ?, format = ?, description = ?, image1 = ?, image2 = ?, image3 = ?, product_id = ? WHERE id = ?";
    pdo_execute($sql, $weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id,$id);
}
function detail_update1( $weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id)
{
    $sql = "UPDATE detail SET weight = ?, typeofstone = ?, format = ?, description = ?, image1 = ?, image2 = ?, image3 = ? WHERE product_id = ? ";
    pdo_execute($sql, $weight, $typeofstone, $format, $description, $image1, $image2, $image3, $product_id);
}

function detail_delete($id)
{
    $sql = "delete from detail where id = ?";
    pdo_execute($sql, $id);
}