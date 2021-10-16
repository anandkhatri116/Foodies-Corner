<html>
<doctype!html>
<head>
<title>My Cart</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
	<link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body id="morder">
<form method=post>
<header >
</header>
<?php include 'nav.php';?>
</form>
</body>
</html>
<div class="container">
<?php
if(isset($_SESSION["uid"]))
{
$con=new mysqli("localhost","root","","food");
$r=$con->query("select * from cartdetail where email='$_SESSION[uid]' && userid='$_SESSION[userid]'");

$Total=0;
while($row=$r->fetch_assoc())
{

	echo"<table style='border:2px solid #ffffff6e;margin: 12px auto;padding: 16px;' id='table'>";
	echo "<tr><td id='ele' style='text-align:center;font-weight: bolder;padding: 10px;font-size: 19px;' colspan='4'><a href=$row[prod_image]><img src='$row[prod_image]'class='pm' style='margin:auto;' ></a></td></tr>";

	echo "<tr><td id='ele' style='text-align:center;font-weight: bolder;padding: 10px;font-size: 19px;' colspan='4'>$row[prod_name]</td></tr>";
	echo "<tr><td id='ele' >Quntity</td><td id='ele'>$row[qty]</td>";
	echo "<td id='ele'>Time</td><td id='ele'>$row[date]</td></tr>";
	echo "<tr><td id='ele'>Price</td><td id='ele'>$row[prod_price]</td>";
	echo "<td id='ele'>Net price</td><td id='ele'>$row[net_price](include all tax)</td></tr>";
	echo "<td  colspan='2' style='padding-top:10px;text-align:center;'><button  class='pbtn' type=submit><a style='width: 3pc;' href=confirmorder.php>Buy</a></button></td>";
	echo "<td  colspan='2' style='padding-top:10px;text-align:center;'><button  class='pbtn' type=submit><a style='width: auto' href=removefromcart.php?pid=$row[prod_id]>Remove</a></button></td>";
	echo"</table>";
	$Total+=$row['net_price'];
}
if($Total==0)
{
	echo "</table>";
	echo "<h3 style='text-align:center;color:white;font-size:2pc;margin:10% 0% 0% 0%;text-shadow: 0px 0px 20px black;'>Your Cart is Still Empty<br>";
	echo "<button  type=submit class='pbtn' style='margin: 3% 0%;border:2px'><a href=product.php style='border:2px solid black;'>Go to order</a></button></h3>";
}
else
{

$con->close();
}
}
else
{
	header("location:login.php");
}

?>
</div>
