<?php
session_start();
if(isset($_SESSION[`name`])){
//echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}

?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> LOGIN </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body background="photo1.jpg">
<h1>Login</h1>
<form action="process.php" method="POST">
	<p>
		<label   style="color: rgb(0,255,0)">Username:</label>
		<input type="text" id="user" name="user" maxlength="20"/>
	
	</p>
	<p>
		<label   style="color: rgb(0,255,0)">Password:</label>
		<input type="password" id="pass" name="pass" maxlength="20"/>
	
	</p>
	<p>
		
		<input type="submit" value="Login" id="btn" name="login"/>
	    <a href="signup.php"   style="color: rgb(255,0,0)">    SIGN UP</a>
	</p> <br/> <br/>
</form>

</body>
