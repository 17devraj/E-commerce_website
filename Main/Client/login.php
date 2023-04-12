<?php

session_start();
  
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','acme');
$cmd="select * from users where username='$username' and password='$password'";
echo "cmd=$cmd";

$sql_obj=mysqli_query($conn,$cmd);
$row_count=mysqli_num_rows($sql_obj);

if($row_count==0)
{
    $_SESSION['login_status']="failed";
    echo "<h2>Invalid credentials</h2><br>
    <a href='login.html'>Try again</a>";
    die;
}

echo "<h2>Login successfully</h2>";
$_SESSION['login_status']="success";
$_SESSION['username']=$username;
$_SESSION['mobile']=$mobile;
$_SESSION['cart']=array();

header('location:view_products.php');
?>