<?php
require_once 'pdo_dao.php';


function user_selectall()
{
    $sql = "SELECT * from users";
    return pdo_query($sql);
}
function user_selectall_role_id()
{
    $sql = "SELECT * from users where role_id = 1";
    return pdo_query($sql);
}
function user_selectall_id($id)
{
    $sql = "SELECT * from users where id = $id";
    return pdo_query_one($sql);
}
function user_selectusername($username)
{
    $sql = "SELECT * from users where username = '$username'";
    return pdo_query_one($sql);
}
//Thêm khách hàng
function user_insert($username, $password, $name, $role_id)
{
    $sql = "insert into users (username,password,name,role_id)
        values(?,?,?,?)";
    pdo_execute($sql, $username, $password, $name, $role_id);
}

function user_update($id,$username, $password, $name)
{ 
    $sql = " UPDATE users SET username = ?, password = ?,name=?  WHERE id = ?";
    pdo_execute($sql,$username, $password, $name,$id);
}

//Xóa khách hàng
function user_delete($id)
{
    $sql = "delete from users where id = ?";
    pdo_execute($sql, $id);
}
