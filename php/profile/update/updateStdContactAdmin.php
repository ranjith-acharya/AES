<?php
$conn=mysqli_connect("localhost","root","","portals");
$contact=$_POST['updateStdCnt'];
$addmission=$_POST['updateStdAddmission'];
$sql="UPDATE student SET contact='$contact' WHERE addmission='$addmission'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStdAdmin.php");
}
?>