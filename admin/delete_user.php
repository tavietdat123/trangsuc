<?php 
require_once "../dao/user_dao.php";
user_delete($_GET['id']);
header("location: index.php?users");