<html>
<doctype!html>
<head>
<title>Product details page</title>
<link rel="stylesheet" href="../CSS/bootstrap.min.css">
<style>
img 
{
	width:100%;
}
td,th
{
   padding:20px;
   padding-top:10px;
       
}
button
{   
	width:125px;
	border-width:1px;
	height:30px;
	padding:8px;
	padding-top:4px;
	padding-bottom:4px;
	color:#337ab7;
	border-radius:5px;
}
button:hover
{
	border-width:1px;
	width:127px;
	height:32px;
	color:#337ab7;
	border-radius:15px;
}
table
{
	float:right;
	margin-right:80px;
	font-size:17px;
}
.mx-auto
{
	width:250px;
	padding-top:80px;

}
</style>
</head>
<body>
<form method=post>
<header >
<img src="../img/logo.png" style=height:250px >
</header>
<?php include 'nav.php';?>
</form>
</body>
</html>
<div class="container">
<?php
session_start();
if(isset($_SESSION["name"]))
{
    echo "<p style=color:#4ecce6><img src='/img/logo.jpg' style=width:50px>  $_SESSION[name]</p><br>";}
if(isset($_GET['name']))

	$name=$_GET['name'];
	$_SESSION["name"]=$name;
	$con=new mysqli("localhost","root","","food");
    $r=$con->query("select * from product where name='$name'");
	while($row=$r->fetch_assoc())
	{
	echo "<a href=$row[image]><img src='$row[image]' class=mx-auto></a>";
	echo "<table><th></th><th></th>";
	echo "<tr><td><h3>$row[name]</h3></td><td></td></tr>";
	echo "<tr><td><label>Name: </label></td><td>$row[name]</td></tr>";
	echo "<tr><td><label>Category: </label></td><td>$row[catagory]</td></tr>";
	echo "<tr><td><label>Price: </label></td><td>$row[prize]</td></tr>";
	}
	echo "<tr><td><form method=post action=order.php >";
	echo "Quantity <input type=number value=1 name=prod_qty style=height:40px;width:50px min=1 max=100>";	
	echo " <button class='bg-success' type=submit >Add to Cart</button></form></td></tr></table>";
	


?>
</div>








