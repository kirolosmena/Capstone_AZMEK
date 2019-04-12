<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
</html>
<?php
//include 'conn.php';

$user=$_POST['user'];
$pass=$_POST['pass'];
$salt= md5('thisistherealme?');
function hashword($string,$salt){
	$string = crypt($string, '$1$'.$salt.'$');
	return $string;
}
$pass=hashword($pass,$salt);
$db_name = "id9272088_kero_dp";
$mysql_username = "id9272088_root";
$mysql_password = "12345678";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$statement = $conn->prepare ("SELECT * FROM `users` WHERE BINARY (username =? AND Password =?);");
if($statement)
{$statement->bind_param("ss",$user,$pass);
$statement->execute();
$statement->store_result();
if ($statement->num_rows > 0) {
                          //set session
						session_start();
						 $_SESSION[`name`] = $user;
						 header('Location: ./home.php');
                        echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
                         exit;


   } else {
               // login failed save error to a session
               //$_SESSION['error'] = 'Sorry, wrong username or password';
			   echo 'Error logged in, The username or the password is not correct, Try agian please';
			   echo '<a href="login.php"><h2> Return </h2></a>';
  }

}







?>
