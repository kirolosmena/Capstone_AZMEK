<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Chat System </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body background="photo2.jpg">
<pre><h1 style="color: rgb(255,0,0)">                                CHAT SYSTEM</h1></pre>

 <p><a href="send.php"   style="color: rgb(0,255,0)"><h2>Send A Message </h2></a> </p>
 <div><a href="read.php"   style="color: rgb(0,255,0)"><h2>Messages</h2></a></div>
<div><a href="logout.php"   style="color: rgb(0,255,0)">LOG OUT</a></div>
</body>

</html>


<?php
session_start();

if(!isset($_SESSION[`name`]))
{
	header('Location: ./login.php');
	
}

?>

