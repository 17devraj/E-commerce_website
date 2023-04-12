<?php

$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];

$fileobj=$_FILES['imgfile'];
// print_r($fileobj);
date_default_timezone_set('Asia/kolkata');
$unique_path='../images/'.date('dmyhis').'.jpg';
// echo "uniquename=$unqiue_path";
move_uploaded_file($fileobj['tmp_name'],$unique_path);

$conn=new mysqli('localhost','root','','acme');
$cmd="insert into products(name,details,price,imgpath)
                  values('$name','$details',$price,'$unique_path')";
echo "Cmd=$cmd<br>";            

$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    echo "<h1>Product uploaded successfully</h1>";
    // header('location:upload_products.html');
}
else
{
    echo "Error in uploading products";
}
?>