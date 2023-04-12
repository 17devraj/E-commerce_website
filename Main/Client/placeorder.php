<?php

$address=$_POST['address'];
$total=$_POST['total'];

session_start();

$localcart=$_SESSION['cart'];
$username=$_SESSION['username'];

$conn=new mysqli('localhost','root','','acme');

for($i=0;$i<count($localcart);$i++)
{
    $pid=$localcart[$i];
    $cmd="insert into orders(username,pid,address) values('$username',$pid,'$address')";
    mysqli_query($conn,$cmd);
}

$_SESSION['cart']=array();
header('location:view_products.php');
?>