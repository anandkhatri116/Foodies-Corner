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
	<h1 class="h-primary" style="color: white;" align="center">Please Signup </h1>
	<!-- <table>
<tr ><p align="center"> Name = <input type="text" name="name" required /></p></tr>
<tr ><p align="center"> Phone = <input type="phone" name="phone" required /></p></tr>  
<tr ><p align="center"> Email = <input type="email" name="email" required /></p></tr>
<tr ><p align="center"> Pwd = <input type="password" name="password" required /></p></tr>
<tr><p><br></p><input type='submit' ></tr>
</table> -->
<table id="table">
    <tr>
     <td id="ele">Name</td>
      <td id="ele"><input type="text" name="name" required /></td>
   </tr>
   <tr>
      <td id="ele">Phone no.</td>
      <td id="ele"><input type="phone" name="phone" required /></td>
   </tr>
   <tr>
      <td id="ele">Email</td>
      <td id="ele"><input type="email" name="email" required /></td>
   </tr>
   <tr>
      <td id="ele">Password</td>
      <td id="ele"><input type="password" name="password" required  /></td>
    </tr>
    <tr >
      <td style="padding: 2pc ​0px 9px 0px;text-align: center;"colspan="3"><a href='login.php' class='buttom-class'><p id="lb">Already user !</p></a></td>
    </tr>
    <tr>
      <td style="padding-top: 0pc;text-align: center;"colspan="3"><input type='submit' ></td>
    </tr>
</table>
</section>
<?php
if(isset($_GET['name']))
{
$name=$_GET["name"];
$phone=$_GET["phone"];
$email=$_GET["email"];
$password=$_GET["password"];
$year=date("is");
$idname=substr($name, 0, strrpos($name, ' '));
$userid= $idname.$year;
$con=new mysqli("localhost","root","","food");
$x=$con->query("insert into login value('$name','$phone','$email','$userid','$password')");
header("location:login.php");

}else{
    
}

?>