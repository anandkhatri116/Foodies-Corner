<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body background="/img/pbg.jpg">
<?php include 'nav.php';
            if(isset($_SESSION["Name"]) )

{
    $name=$_SESSION["Name"];
    $name=substr($name, 0, strrpos($name, ' '));
}else{
        header("location:login.php");
}
?>
    <section id="services-container">
    <div id="services">
            <table>
                <tr id="profile">
                    <th class="bx">
                        <?php
        $con=new mysqli("localhost","root","","food");
$r=$con->query("select * from cartdetail where email='$_SESSION[uid]' && userid='$_SESSION[userid]'");

$Total=0;
$orders=0;
while($row=$r->fetch_assoc())
{
    $Total+=$row['net_price'];
    $orders+=1;
}
if($Total==0)
{
}else{
}
 $result=$con->query("select * from login");
        while($row = $result->fetch_assoc())
                {
                  $phone=$row["phone"];
                  $userid= $row["userid"];
                  $email=$row["email"];
                
                }
                $_SESSION["userid"]=$userid;
            ?>
                        <p class="text">Name : <?php echo"".$name; ?></p>
                        <p class="text">phone no. : <?php echo"".$phone; ?></p>
                        <p class="text">Userid : <?php echo"".$userid; ?></p>
                        <p class="text">id : <?php echo"".$email; ?></p>
                        <button class="pbtn"><a href="logout.php">Logout</a></button>
                        <button class="pbtn"><a href="#edit">Edit</a></button>
                        </th>
                        <th class="photo">
                        <img src="/img/profile.jpg" width=" 10px" style="border: 50%;" alt="" >
                        </th>
                </tr>
    
            
            </table>           
            <table id="border" style="color:white;"><a href="myorder.php"></a>
                <tr>
                    <th class="contain">
                    <a href="myorder.php" style="text-decoration: none;"><p class="scon" style="color: black;">Orders</p></a>
                    <a href="myorder.php" style="text-decoration: none; color:white;"><p class="scon" ><?php echo"$orders"; ?></p></a></th> <th class="contain">
                    <a href="myorder.php" style="text-decoration: none;"><p class="scon" style="color: black;">Total price</p></a>
                    <a href="myorder.php" style="text-decoration: none; color:white;"><p class="scon"><?php echo"$Total"; ?>/- ₹</p></a>
                    </th>
                </tr>
            </table>

        </div>
    </section>
</body>

</html>