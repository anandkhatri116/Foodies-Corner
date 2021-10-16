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
if(isset($_GET["pid"]))
$prod_id=$_GET["pid"];
$con=new mysqli("localhost","root","","food");
$result=$con->query("delete from cartdetail where prod_id='$prod_id'");
header("location:myorder.php");

?>