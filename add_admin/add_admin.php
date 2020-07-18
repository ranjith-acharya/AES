<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="uname" placeholder="Enter Name" required><br><br>
		<input type="email" name="mail" placeholder="Enter E-Mail" required><br><br>
		<input type="password" name="pass" placeholder="Enter Password" required><br><br>
		<textarea name="address" placeholder="Enter Address" required></textarea><br><br>
		<input type="file" name="avatar" required><br><br>
		<input type="submit" name="SUBMIT" value="ADD">
	</form>
</body>
</html>
<?php
error_reporting(0);
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "portals";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if($conn->connect_error){
		echo "<br>ERROR - 404";
	}else{
		echo "<br>Connected";
	}
	$name = $_POST['uname'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$address = $_POST['address'];
	$avatar = $_FILES['avatar']['name'];
	$avatar_tmp = $_FILES['avatar']['tmp_name'];
	if(!$_POST['SUBMIT']){
		echo "<br>All Fields are Required";
	}else{
		$location = "../img/";
		if(move_uploaded_file($avatar_tmp,$location.$avatar)){
			echo "<br>File Uploaded";
		}else{
			echo "<br>Failed to Upload";
		}
		$sql = "INSERT into admin(name, mail, pass, address, avatar) VALUES('$name', '$mail', '$pass', '$address', '$avatar')";
		if(mysqli_query($conn,$sql)){
			echo "<br>Data Stored";
		}else{
			echo "<br>Failed to Store";
		}
	}
?>