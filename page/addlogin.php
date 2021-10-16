<!DOCtype html>
<html>
<head>
<title>Login Page</title>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
   <link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'nav.php';?>
<form action:"signin.php" method='get'>
<section id="login">
<img src="login.png" alt="">

	<h1 class="h-primary" align="center">Please Login </h1>
	
<tr>
	<tr ><p align="center"> Email = <input type="text" name="uid" required /></p></tr>
	<tr><p align="center"> Password = <input type="password" name="pwd" required  /><br></p></tr>
  <tr><p><br></p><input type='submit' ></tr>
  <tr><p><br></p><p><a href='signup.php?id=".$row['email']."' class='buttom-class'></p>Am New User! Signup</tr>
</tr>

</section>


<?php
session_start();
if(isset($_GET["uid"]))
{$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$con=new mysqli("localhost","root","","food");
$r=$con->query("select * from login where email='$uid'&&password='$pwd'");
if($row=$r->fetch_assoc())
{	
	header("location:order.php");
}
else
{
	header("location:signup.php");
}
$uid=$_SESSION["uid"];

$con->close();
}



?>