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

    <body id="morder">
    <?php include 'nav.php';
$con=new mysqli("localhost","root","","food");
$result=$con->query("select * from product");
while($row = $result->fetch_assoc())
{
    echo" <div id='services'> <div class='box'>";
echo"<table style= 'width:100%;'>";
echo"  <tr><th rowspan='9'><a href=$row[image] style= width: 31%;margin: auto;><img src='$row[image]' alt=' '></a></th><th style=width:50px></th><th style='width:50%'></th></tr>";
echo"  <tr><td id='pro' style='width:fit-contant;'>Name</td> <td id='pro'>$row[name]</td></tr>";
echo"  <tr><td id='pro'>Catagory</td> <td id='pro'>$row[catagory]</td></td></tr>";
echo"  <tr><td id='pro'>Element</td> <td id='pro'><details><summary>Detail!!</summary>$row[speciality]</details></td></td></tr>";
echo"  <tr><td id='pro'>Price</td> <td id='pro'>$row[prize]</td></td></tr>";
echo"  <tr><td colspan='2' style='height:20px;    text-align: center;
'><button class='pbtn' style='width:max-content;' type=submit> <a href='productdetail.php?id=$row[name]'style='border:2px solid black;'>Order Now</a></button></td></td></tr>";

echo"  </table></div>";
}
  $con->close()
?>










<!-- echo"  <tr><th rowspan='6'><a href=$row[image] style= width: 31%;margin: auto;><img  src='$row[image]' width: 5pc;
margin-right: 25px;></a></th><th style=width:50px></th><th style='width:20%'></th></tr>";
echo"  <tr><td id='pro' style='height:50px'>Name</td> <td id='pro'>$row[name]</td></td></tr>";
echo"  <tr><td id='pro' style='height:50px'>Catagory</td> <td id='pro'>$row[catagory]</td></td></tr>";
echo"  <tr><td id='pro' style='height:50px'>Element</td> <td id='pro'><details><summary>Detail!!</summary>$row[speciality]</details></td></td></tr>";
echo"  <tr><td id='pro' style='height:50px'>Price</td> <td id='pro'>$row[prize]</td></td></tr>";
echo"  <tr><td style='height:50px'><button class='pbtn' style='width:max-content;' type=submit> <a href='productdetail.php?id=$row[name]'style='border:2px solid black;'>Order Now</a></button></td></td></tr>"; -->