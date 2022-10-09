<?php 
require_once "../dao/category_dao.php";
category_delete($_GET['id']);
header("location: index.php?categories");