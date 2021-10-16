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
	<h1 class="h-primary" align="center">Please Login </h1>
   <table id="table">
    <tr> 
      <td id="ele">Email</td>
      <td id="ele"><input type="text" name="uid" required /></td>
    </tr>
    <tr>
      <td id="ele">Password</td>
      <td id="ele"><input type="password" name="pwd" required  /></td>
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
$r=$con->query("select * from admin where email='$uid'&&password='$pwd'");
if($row=$r->fetch_assoc())
{	
	header("location:productinput.php");
}
else
{
    ?>
   <script>
      alert("Access denied \nplease contact admin")
   </script>
   <?php
}

$con->close();
}



?>