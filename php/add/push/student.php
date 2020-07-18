<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "portals";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
$addmission=mysqli_real_escape_string($conn,$_POST['addmission']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstName']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastName']);
$mail=mysqli_real_escape_string($conn,$_POST['mailAddr']);
$pass=md5(mysqli_real_escape_string($conn,$_POST['pass']));
$address=mysqli_real_escape_string($conn,$_POST['addr']);
$birth=mysqli_real_escape_string($conn,$_POST['birth']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$branch=mysqli_real_escape_string($conn,$_POST['branch']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$avatar=$_FILES['avatar']['name'];
$avatar_tmp=$_FILES['avatar']['tmp_name'];
//echo $addmission."<br>".$firstname."<br>".$lastname."<br>".$mail."<br>".$pass."<br>".$address."<br>".$birth."<br>".$contact."<br>".$branch."<br>".$gender."<br>".$avatar."<br>".$avatar_tmp;
if(!$_POST['studentData']){
	echo "All Fields are Required";
}else{
	$location = "../../../img/student/avatar/";
	if(move_uploaded_file($avatar_tmp,$location.$avatar)){
		echo "Image Uploaded";
	}else{
		echo "Failed to Upload";
	}
	$sql = "INSERT into student(addmission,firstname,lastname,mail,pass,address,birth,contact,branch,gender,avatar) VALUES('$addmission','$firstname','$lastname','$mail','$pass','$address','$birth','$contact','$branch','$gender','$avatar')";
	if(mysqli_query($conn,$sql)){
		echo "All Data Stored to DataBase";
		echo "<script>window.close()</script>";
	}else{
		echo "Failed to Store";
	}
}
?>