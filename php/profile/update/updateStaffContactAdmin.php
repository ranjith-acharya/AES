<?php
$conn=mysqli_connect("localhost","root","","portals");
$contact=$_POST['updateStaffCnt'];
$username=$_POST['updateStaffUsername'];
$sql="UPDATE staff SET contact='$contact' WHERE username='$username'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStaffAdmin.php");
}
?>