<Doctype! html>
<html>
<head>
<title>product input page</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<?php include 'nav.php';?>
<form action:"productinput.php" method='get'>
<section id="login">
	<h1 class="h-primary" align="center" style="color: white;">Please Login </h1>


<table id="table">
    <tr>
     <td id="ele">Name</td>
      <td id="ele"><input type="text"    name="name" required /></td>
   </tr>
   <tr>
      <td id="ele">type</td>
      <td id="ele"><input type="text"    name="catagory" required /></td>
   </tr>
   <tr>
      <td id="ele">Element</td>
      <td id="ele"><input type="text" name="speciality" required /></td>
   </tr>
   <tr>
      <td id="ele">Price</td>
      <td id="ele"><input type="number" name="prize" required /></td>
    </tr>
    <tr>
      <td id="ele">Image</td>
      <td id="ele"><input type="text"   name="image" required /></td>
    </tr>
    <tr>
      <td style="padding-top: 1pc;text-align: center;"colspan="3"><button type='submit' style="color:white;border: 2px solid white;" class="pbtn">Submit</button></td>
    </tr>
</table>
</section>
</form>
</body>
</head>
</html>
<?php
if(isset($_GET["name"]))
{
$name=$_GET["name"];
$catagory=$_GET["catagory"];
$speciality=$_GET["speciality"];
$prize=$_GET["prize"];
$image=$_GET["image"];
$image="/img/".$image.".jpg";
$con=new mysqli("localhost","root","","food");
$x=$con->query("insert into product value('$name','$catagory','$speciality','$prize','$image')");
header("location:product.php");
$con->close();
}
?>
