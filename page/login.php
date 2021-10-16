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
<body>
<?php include 'nav.php';?>
<form action:"signin.php" method='get'>
<section id="login">
<img src="login.png" alt="">

	<h1 class="h-primary" style="color:white;height: max-content;" align="center">Please Login </h1>
 <table id="table">
    <tr> 
      <td id="ele">Email</td>
      <td id="ele"><input type="text" name="uid" required /></td>
    </tr>
    <tr>
      <td id="ele">Password</td>
      <td id="ele"><input type="password" name="pwd" required  /></td>
    </tr>
    <tr >
      <td style="padding: 2pc ​0px 9px 0px;text-align: center;"colspan="3"><a href='signup.php' class='buttom-class'><p id="lb" style="padding: 1pc 0px 0pc 0px;">Am New User! Signup</p></a></td>
    </tr>
    <tr >
      <td style="padding: 0pc ​0px 9px 0px;text-align: center;"colspan="3"><a href='productlogin.php' class='buttom-class'><p id="lb">Login as admin</p></a></td>
    </tr>
    <tr>
      <td style="text-align: center;"colspan="3"><input type='submit' ></td>
    </tr>
</table>
</section>
<?php
if(isset($_GET["uid"]))
{$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$con=new mysqli("localhost","root","","food");
$r=$con->query("select * from login where email='$uid'&&password='$pwd'");
if($row=$r->fetch_assoc())
{	
  $_SESSION["Name"]=$row['name'];
  $_SESSION["uid"]=$uid;
  $_SESSION["Phone"]=$row['phone'];

  echo"Name = ".$row['phone'];

	header("location:home.php");

}
else
{ ?>
  <script>
     alert ("Please Check username & password");
</script>
<?php
}
$con->close();
}
?>