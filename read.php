<?php
session_start();
$key= md5('thisistherealme?');
function decrypt($string,$key){
	$string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$key,base64_decode($string),MCRYPT_MODE_ECB));
	RETURN $string;
	
}
// Create connection
$db_name = "id9272088_kero_dp";
$mysql_username = "id9272088_root";
$mysql_password = "12345678";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
$reciever=$_SESSION[`name`];
$result= mysqli_query($conn,"SELECT sender,message FROM `messages` where reciever='$reciever'");
while ($row = $result->fetch_assoc()) {
	echo" Message from ";
	echo $row['sender']."<br>";
	//$link='read.php';
	//echo "<a href='".$link."'>Message from ".$row['sender']."</a>";
	
	//echo"<br>";
	$mess=decrypt($row['message'],$key);
	echo $mess;
	echo"<br>";
	echo"<br>";
		}
?>
