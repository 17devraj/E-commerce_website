<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .cart{
            position:relative;
        }

        .cart-count{
            position: absolute;
            top: -10px;
            left: 50px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: red;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php

session_start();
if(! isset($_SESSION['login_status']))
{
    echo "<h3>Login first</h3>";
    die;
}

$login_status=$_SESSION['login_status'];

if($login_status=="failed")
{
    echo "<h3>Unauthorized attemt to login</h3>";
    die;
}
$username=$_SESSION['username'];
$localcart=$_SESSION['cart'];
$cart_count=count($localcart);
echo "<div>
            <div>Hi $username</div>
            <a href='viewcart.php'>
            <div class='cart'>View cart
            <span class='cart-count'>$cart_count</span>
            </div></a>
            <div><a href='logout.php'>Logout</a></div>
</div>";
?>