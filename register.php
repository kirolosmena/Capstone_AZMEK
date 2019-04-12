<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sign up Page </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
</html>
<?php
if(strlen($_POST['newpass'])<8)
{
    echo"The password is too short, It should be at least 8 characters";
   echo '<a href="signup.php"><h2> Return </h2></a>';

    exit();
}
if($_POST['newpass']!=$_POST['cnewpass']){
    echo"The two passwords does not match";
    echo '<a href="signup.php"><h2> Return </h2></a>';
    exit();
}
$newuser=$_POST['newuser'];
$newpass=$_POST['newpass'];


$salt= md5('thisistherealme?');

function hashword($string,$salt){
	$string = crypt($string, '$1$'.$salt.'$');
	return $string;
}
if(!empty($newpass))
$newpass=hashword($newpass,$salt);
//$newuser=encrypt($newuser,$key);
// Create connection
$db_name = "id9272088_kero_dp";
$mysql_username = "id9272088_root";
$mysql_password = "12345678";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	//check if the username exists already in the database
	 $sql =$conn->prepare("SELECT * FROM `users` WHERE username=? ");
	 
	 $sql->bind_param("s",$newuser);
	 $sql->execute();
	 $sql->store_result();
	 if ($sql->num_rows == 0 && !empty($newpass) && !empty($newuser)) {
                          
		 //set session
	//	session_start();
	//	$_SESSION[`newname`] = $newuser;
			//store the new username and password in the database

			$sqli = $conn->prepare("INSERT INTO `users` ( `username`, `Password`) VALUES ( ?, ?)");
		
			$sqli->bind_param("ss",$newuser,$newpass);
			$sqli->execute();
			$sqli->store_result();
			//
              
                 // echo "<script type='text/javascript'>window.location.href = 'afterregister.php';</script>";
                header('Location: ./afterregister.php');
                  exit; //to dont run the rest of code
 } 
	else{ if(empty($newpass)) //check if the user didnt enter a password
			{	echo"Please enter a password";
			    echo '<a href="signup.php"><h2> Return </h2></a>';
			}
			else if(empty($newuser))
			{	echo"Please enter a username";
			    echo '<a href="signup.php"><h2> Return </h2></a>';
			}
		    else {echo"This username is already used try another one";
		        echo '<a href="signup.php"><h2> Return </h2></a>';
		    }
			
			
		}



?>
