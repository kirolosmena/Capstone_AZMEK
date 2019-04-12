<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Congratulation you are now User </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>

<pre><h1>                                   Success</h1></pre>
<h2>Try To</h2> <a href="login.php"><h2> LOGIN </h2></a> 

</body>



</html>
<?php
session_start();
if(isset($_SESSION[`name`])){
//	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}


?>