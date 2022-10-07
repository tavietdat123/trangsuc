<?php
require_once './dao/pdo_dao.php';

//Gọi tất cả bảng
function user_selectall()
{
    $sql = "SELECT * from users";
    return pdo_query($sql);
}

//Thêm khách hàng
function user_insert($username, $password, $name, $role_id)
{
    $sql = "insert into users (username,password,name,role_id)
        values(?,?,?,?)";
    pdo_execute($sql, $username, $password, $name, $role_id);
}

function user_update($id,$username, $password, $name, $role_id)
{ 
    $sql = " UPDATE users SET username = ?, password = ?,name=?,role_id=?  WHERE id = ?";
    pdo_execute($sql,$username, $password, $name,$role_id,$id);
}

//Xóa khách hàng
function user_delete($id)
{
    $sql = "delete from users where id = ?";
    pdo_execute($sql, $id);
}
