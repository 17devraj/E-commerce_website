<?php

$pid=$_GET['pid'];
session_start();
$localcart=$_SESSION['cart'];

if(in_array($pid,$localcart))
{
    echo "Item already in cart";
}
else
{
    array_push($localcart,$pid);
    $_SESSION['cart']=$localcart;
    header('location:view_products.php');
}
?>