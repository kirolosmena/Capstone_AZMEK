
<?php
session_start();
//echo"sssssssssssss";
$key= md5('thisistherealme?');
function encrypt($string,$key){
	$string=rtrim(base64_encode(MCRYPT_ENCRYPT(MCRYPT_RIJNDAEL_256,$key,$string,MCRYPT_MODE_ECB)));
	RETURN $string;
	
}



// Create connection
$db_name = "id9272088_kero_dp";
$mysql_username = "id9272088_root";
$mysql_password = "12345678";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$mess=encrypt($_POST['content'],$key);
	 $sql =$conn->prepare("SELECT * FROM `users` WHERE username =? ");
	 $sql->bind_param("s",$_POST['touser']);
	 $sql->execute();
	 $sql->store_result();
	 $query = "SELECT * FROM `users`";
	 $result2 = mysqli_query($conn, $query);

	$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
if (isset($_POST['content'])&& ISSET($_POST['touser'])&&$sql->num_rows == 1&&$_POST['touser']!=$_SESSION[`name`])

	{//echo"ddddddddddddddd";
		$sqli = $conn->prepare("INSERT INTO `messages` ( `sender`, `reciever`,`message`) VALUES ( ?, ?,?)");
		$sqli->bind_param("sss",$_SESSION[`name`],$_POST['touser'],$mess);
		$sqli->execute();
//	echo "<script type='text/javascript'>window.location.href = 'confirm.php';</script>";
		header('Location: ./confirm.php');
	}

//else echo"Error sending the message "



?>
<?php
session_start();
if(!isset($_SESSION[`name`]))
{
	header('Location: ./login.php');
	
}

?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title style="color: rgb(255,0,0)"> Send a message </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>
<h1 style="color: rgb(255,0,0)">Send FORM</h1>
<form action="" method="POST">
	<p>
		<label style="color: rgb(100,100,250)">SEND To</label>
		
        <select name="touser">
            <?php echo $options;?>
        </select>

	
	</p>
	<p>
		<label style="color: rgb(100,100,250)">Message:</label>
		<textarea id="content" name="content"></textarea>
	
	</p>
	<p>
		
		<input type="submit" value="Send" id="btn" name="Send"/>
	
	</p> <br/> <br/>
</form>
</body>
</html>

