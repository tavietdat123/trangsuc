<?php
require_once "../dao/cart_dao.php";
cart_delete($_GET['id']);
header("location: index.php?cart")
?>