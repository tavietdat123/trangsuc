<<<<<<< Updated upstream
=======
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
//sản phẩm theo danh mục
function category_select_dm($iddm)
{
    $sql = "select * from categories where 1";
    if ($iddm > 0) {
        $sql .= " AND category_id=" .$iddm ;
    }
    $sql .= "order by id desc";
    return pdo_query_one($sql);
}
function category_insert($name)
{
    $sql = "insert into categories (name)
        values(?)";
    pdo_execute($sql, $name);
}
function category_update($id, $name)
{
    $sql = "UPDATE categories SET name = ? WHERE id = ?";
    pdo_execute($sql, $name, $id);
}

function category_delete($id)
{
    $sql = "delete from categories where id = ?";
    pdo_execute($sql, $id);
}
>>>>>>> Stashed changes
