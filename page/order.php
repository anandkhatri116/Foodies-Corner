<!DOCTYPE html>
<html lang="en">


<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    </head>

<body>
<?php
session_start();   
if(isset($_SESSION["uid"]) )
$name=$_SESSION["name"];
$email=$_SESSION["uid"];
$prize=$_SESSION["prize"];
$image=$_SESSION["image"];
$qty=$_POST["prod_qty"];
$userid=$_SESSION["userid"];

$con=new mysqli("localhost","root","","food");
$result=$con->query("select * from product where name='$name'");
while($row=$result->fetch_assoc())
{
    $prod_qty=$qty;
$prod_name=$row["name"];
$prod_prize=$row["prize"];
$total_prize=($prod_prize)*($qty);
$charge_tax=$total_prize*(0.05);
$net_prize=$total_prize+$charge_tax;
$prod_image=$row["image"];
$prod_id=$prod_name.$qty.date("His");
$date=date("H:i:s a");
}
$con->query("insert into cartdetail values ( '$email','$userid', '$prod_name', $prod_prize, $qty, $total_prize, $charge_tax, $net_prize, '$prod_image','$prod_id','$date') ");

$con->close();
header("location:myorder.php");



?>