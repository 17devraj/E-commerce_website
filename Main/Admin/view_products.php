<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
            *{
                margin: 0%;
            }

            .container{
                display: flex;
                justify-content: start;
            }

            .card{
                margin: 15px;
            }

            .card-img{
                width: 400px;
            }

            .card-price{
                font-size: 40px;
                color: red;
            }

            .btn{
                background: red;
                color: white;
                border: none;
                padding: 7px;
            }
        </style>
	</head>
	<body></body>
</html>

<?php

$conn=new mysqli('localhost','root','','acme');
$sql_obj=mysqli_query($conn,"select * from products");
$total_rows=mysqli_num_rows($sql_obj);

echo "<div class='container'>";
for($i=0;$i<$total_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $imgpath=$row['imgpath'];
    // print_r($row);

    echo "  <div class='card'>
                <img class='card-img' src='$imgpath'>
                <div class='card-body'>
                    <h4 class='card-title'>$name</h4> 
                    <p class='card-text'>$details</p>
                    <p class='card-price'><span style='font-size:30px;'>₹</span>$price</p>
                    <a href='delete_products.php?pid=$pid'><button class='btn'>Delete</button></a>
                    </div>
            </div>
        ";
}
?>