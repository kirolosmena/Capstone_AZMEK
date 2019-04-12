<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CHAT Application </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>

<body background="photo1.jpg">
<h1   style="color: rgb(255,0,0)">CHAT SYSTEM</h1>
 <p><a href="signup.php" style="color: rgb(0,255,0)"><h2>                           REGISTER </h2></a> </p>
 <p><a href="login.php" style="color: rgb(0,255,0)"><h2>                            LOGIN </h2></a> </p>

</body>



</html>
<?php
session_start();
if(isset($_SESSION[`name`])){
//	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');

}
//else header('Location: ./index.php');
?>