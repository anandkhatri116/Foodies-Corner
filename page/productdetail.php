<html>
<doctype!html>
<head>
<title>Product details page</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
	<link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    </head>
	<body id="morder">
	<?php include 'nav.php';
if(isset($_GET['id']) && $_GET['id'] !== '')
{
	
	$name=$_GET['id'];
	$con=new mysqli("localhost","root","","food");
	$result=$con->query("select * from product where name='$name'");
	while($row=$result->fetch_assoc())
	{
	echo" <div id='services'> <div class='box'>";
	echo"<table style= 'width:100%'>";
	echo"  <tr><th rowspan='9'><a href=$row[image] style= width: 31%;margin: auto;><img src='$row[image]' alt=' '></a></th><th style=width:50px></th><th style='width:50%'></th></tr>";
	echo"  <tr><td id='pro'>Name</td> <td  id='pro'>$row[name]</td></td></tr>";
    echo"  <tr><td id='pro'>Catagory</td> <td id='pro'>$row[catagory]</td></td></tr>";
    echo"  <tr><td id='pro'>Element</td> <td id='pro'>$row[speciality]</td></td></tr>";
    echo"  <tr><td id='pro'>Price</td> <td id='pro'>$row[prize]</td></td></tr>";
	echo "<form method=post action=order.php >";
		echo "<tr><td id='pro'>Quntity</td><td id='pro'><input  style='color:white;' id='demo' type=number class='pbtn' value='1'  name=prod_qty style=height:40px;width:50px min=1 max=100></td></tr> ";	
		echo "<td  colspan='2' style='padding-top:10px;text-align:center;'><button  class='pbtn' type=submit><a style='width: 3pc;'>Buy</a></button></td>";
	
{

	echo "<form method=post action=addlogin.php >";
	$_SESSION["name"]=$row["name"];
	$_SESSION["prize"]=$row["prize"];
	$_SESSION["image"]=$row["image"];

}

}
}
else{
	echo "failed";
  }
	?>