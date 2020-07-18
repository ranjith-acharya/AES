<?php
session_start();
$_SESSION['user'];
?>
<?php
$conn=mysqli_connect("localhost","root","","portals");
$address=$_POST['updateStaffAdd'];
$username=$_SESSION['user'];
$sql="UPDATE staff SET address='$address' WHERE username='$username'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStaff.php");
}
?>