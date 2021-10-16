<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Online Food Delivery Service in India | MyOnlineMeal.com</title>
    <link rel="stylesheet" href="home.css"> 
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="home.css">
    <link rel="stylesheet" media="screen and (max-width: 509px)" href="phone.css">


    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <table id="navbar" style="width:100%;height:max-content;">
        <tr>
            <th class="li"><a href="home.php">Home</a></th>
            <th class="li"><a href="product.php">Order now</a></th>
            <?php
            session_start();
            if(isset($_SESSION["Name"]) )
            {
                $name=$_SESSION["Name"];
                $hello="Hello ";
                $name=$hello.substr($name, 0, strrpos($name, ' '));
            }else{
                $name="login please";
            }
           

            ?>
            <th class="li" style="padding: 3px 5px; font-size:2pc; ">
                <a href="profile.php"><?php echo"".$name; ?></a>
            </th>
            <th class="li"><a href="home.php#contact">Contact Us</a></th>
            <th class="li"><a href="myorder.php"> My order</a></th>
        </tr>
    </table>
    <script>
    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</body>

</html>