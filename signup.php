<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SIGN UP </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body background="photo2.jpg">

	<p>
		<h1   style="color: rgb(255,0,0)">SIGN UP</h1>
<form action="register.php" method="POST">
		<label   style="color: rgb(0,255,0)">Username:</label>
		<input type="text" id="newuser" name="newuser" maxlength="20"/>
	
	</p>

	<p>
		<label   style="color: rgb(0,255,0)">Password:</label>
		<input type="password" id="newpass" name="newpass" maxlength="20"/ >
	
	</p>
		<p>
		<label   style="color: rgb(0,255,0)">Repeat Password:</label>
		<input type="password" id="newpass" name="cnewpass" maxlength="20"/>
	
	</p>
	<p>
		
		<input type="submit" value="Signup" id="signup" name="signup"/>
	
	</p> 
</form>	
</body>
<?php
session_start();
if(isset($_SESSION[`name`])){
//echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}

?>