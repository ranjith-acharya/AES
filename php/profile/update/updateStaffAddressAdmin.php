<?php
$conn=mysqli_connect("localhost","root","","portals");
$address=$_POST['updateStaffAdd'];
$username=$_POST['updateStaffUsername'];
$sql="UPDATE staff SET address='$address' WHERE username='$username'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStaffAdmin.php");
}
?>