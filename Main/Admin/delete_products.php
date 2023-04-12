<?php


$conn=new mysqli('localhost','root','','acme');
$pid=$_GET['pid'];
$sql_status=mysqli_query($conn,"delete from products where pid=$pid");
if($sql_status)
{
    header('location:view_products.php');
}
else
{
    echo "Error in deleting, check the command";
} 
?>