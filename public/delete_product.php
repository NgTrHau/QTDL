<?php
include '../partials/mysqli_connect.php';
    $id=$_GET["id"];
    mysqli_query($dbc," DELETE FROM products WHERE proID=$id ");
    header("Location:admin_products.php");
?>