<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Messaging System </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>

<body>
<pre><h1>                                  Send Confirmed</h1></pre>
<h2> You may now <a href="home.php">Return Home </a></h2>
<?php
session_start();
if($_SESSION[`name`]==null){
//	echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
     header('Location: ./login.php');

}

?>