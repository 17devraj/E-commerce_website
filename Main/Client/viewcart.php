<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
            *{
                margin: 0%;
            }

            .container{
                justify-content: start;
            }

            .card{
                margin: 15px;
            }

            .card-img{
                width: 300px;
            }

            .card-price{
                font-size: 40px;
                color: red;
            }

            .btn{
                background: green;
                color: white;
                border: none;
                padding: 7px;
            }
        </style>
	</head>
	<body></body>
</html>

<?php

session_start();
$localcart=$_SESSION['cart'];

$pid_str=implode(",",$localcart);
$cmd="select * from products where pid in($pid_str)";
echo "Cmd=$cmd";

$conn=new mysqli('localhost','root','','acme');
$sql_obj=mysqli_query($conn,$cmd);
$total_rows=mysqli_num_rows($sql_obj);

echo "<div class='container'>";
$total=0;
for($i=0;$i<$total_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $imgpath=$row['imgpath'];
    $total+=$price;
    // print_r($row);

    echo "  <div class='card'>
                <img class='card-img' src='$imgpath'>
                <div class='card-body'>
                    <h4 class='card-title'>$name</h4> 
                    <p class='card-text'>$details</p>
                    <p class='card-price'><span style='font-size:30px;'>₹</span>$price</p>
                    <a href=#><button class='btn'>Place Order</button></a>
                    <h2>Total price: $total Rs.</h2>
                    </div>
            </div>
        ";
}

echo "<div>
            <form method='post' action='placeorder.php'>
            <h2>Total price</h2>
            <h2 name='total'>$total</h2>
            <textarea name='address' placeholder='Delivery address'></textarea>
            <input type='submit' value='Place order'>

</div>"
?>