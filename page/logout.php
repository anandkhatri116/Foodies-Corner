<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["Name"]);

header("Location:home.php");
?>