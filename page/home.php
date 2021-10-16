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
<body>
<?php include 'nav.php';?>
    <section id="services-container">
        <div id="services">
            <div class="headbox">
                <section id="home">
                    <ul style="display:grid;">
                        <li style="list-style-type: none;">
                            <h1 class="h-primary">Welcome to MyOnlineMeal</h1>
                        </li>
                        <li style="list-style-type: none;">
                            <p>Now order your favorite dish at your home with some charges</p>
                        </li>
                        <li style="list-style-type: none;"><button class="btn" ><a href="product.php" style="text-decoration: none; font-family: Bree Serif, serif;">Order
                                    now!</a></button></li>
                    </ul>

                </section>
            </div>
            <h1 class="h-primary center">Our Services</h1>
            <div id="s">
            <div class="hbox">
                <img src="/img/logo2.png" alt="">
                <h2 class="h-secondary center">Our Custmore</h2>
                <p class="center">We're always committed to work according to the customer expectations, making it overall a relishing experience for the customers. .</p>
            </div>
            <div class="hbox">
                <img src="/img/logo3.png" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">You can get in touch with us to know the details if you would like to order products in bulk <br>At one time you order maximam 100 items</p>
            </div>
            <div class="hbox">
                <img src="/img/delivery.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">We will provide you home delivery with less charge</p>
            </div>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center"><b>Owner of<b></h1>
        <div id="clients">
            <div class="client-item">
                <img src="/img/logo.jpg" alt="Our Client" >
            </div>
        </div>
        </div>

    </section>
    <?php
     if(isset($_SESSION["Name"]) )
     {
         $name=$_SESSION["Name"];
         $email=$_SESSION["uid"];
         $phone=$_SESSION["Phone"];
     }else{
         $name=NULL;
         $email=NULL;
         $phone=NULL;
     }
    ?>
    <section id="contact">
        <h1 class="h-primary center">Contact</h1>
        <div id="contact-box">
            <form action="">
             <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" value="<?php echo"$name"?>" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" value="<?php echo"$email"?>" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone No. : </label>
                    <input type="phone" value="<?php echo"$phone"?>" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                 <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="10" rows="10"></textarea>
                </div> 
                <div class="form-group">
                <button class='pbtn' type=submit name="send" style="display: block;border: 2px solid black;margin: 0% auto; width: auto;">send the feedback</button></div> 
            </form> 
        </div>
    </section>
    <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mail/src/Exception.php';
require 'mail/src/SMTP.php';
require 'mail/src/PHPMailer.php';
//Create an instance; passing `true` enables exceptions
if( (isset($_GET['email'])) != NULL )
{
	$name=$_GET['name'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
	$message=$_GET['message'];
$mail = new PHPMailer(true);
if($email == NULL)
{
?><script>alert("Login please");</script><?php
}
else{
try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'pankajrestaurant1971@gmail.com';                     //SMTP username
      $mail->Password   = 'nareshkhatri1971';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('pankajrestaurant1971@gmail.com', 'Custmore');
      $mail->addAddress('pankajrestaurant1971@gmail.com', 'Admin');     //Add a recipient
    
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $name.' is give Feedback';
      $mail->Body    = 'Custmore Name : '.$name.'<br>Email ID : '.$email.'<br>Phone no. : '.$phone.'<br>Message : '.$message;
  
      $mail->send();
      echo"<script>alert('Thank you for give feedback');</script>";
    //   header("location:#headbox");
  } catch (Exception $e) {
    echo"<script>alert('Message could not be sent.');</script>";
}
       
}
}
    ?>
    <footer>
        <div class="center">
            Copyright &copy; www.pankajrestrorent.com. All rights reserved!
        </div>
    </footer>
</body>

</html>