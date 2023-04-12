<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=='dev' && $password=='admin')
{
    $_SESSION['login_status']="success";
    echo "<h2>Login Successfully</h2>";
    header('location:upload_products.html');
}
else
{
    $_SESSION['login_status']="failed";
    echo "<h2>Invalid Credentials</h2>";
}
?>