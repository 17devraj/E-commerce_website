<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','database');
$cmd="insert into contactme(name,email,message)
                            values('$name','$email','$message')";                            
echo "Cmd=$cmd<br>";
$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    echo"Message sent";
}    
else
{
     echo"ERROR";
}
?>