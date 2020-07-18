<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="portals";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstName']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastName']);
$mail=mysqli_real_escape_string($conn,$_POST['mailAddr']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$address=mysqli_real_escape_string($conn,$_POST['addr']);
$birth=mysqli_real_escape_string($conn,$_POST['birth']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$branch=mysqli_real_escape_string($conn,$_POST['branch']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$avatar=$_FILES['avatar']['name'];
$avatar_tmp=$_FILES['avatar']['tmp_name'];
if(!$_POST['staffData']){
	echo "All Fields are Required";
}else{
	$location = "../../../img/teacher/avatar/";
	if(move_uploaded_file($avatar_tmp,$location.$avatar)){
		echo "Image Uploaded";
	}else{
		echo "Failed to Upload";
	}
	$sql = "INSERT into staff(username,firstname,lastname,mail,pass,address,birth,contact,branch,gender,avatar) VALUES('$username','$firstname','$lastname','$mail','$pass','$address','$birth','$contact','$branch','$gender','$avatar')";
	if(mysqli_query($conn,$sql)){
		echo "All Data Stored to DataBase";
		echo "<script>window.close()</script>";
	}else{
		echo "Failed to Store";
	}
}
?>