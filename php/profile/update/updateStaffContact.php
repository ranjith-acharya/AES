<?php
session_start();
$_SESSION['user'];
?>
<?php
$conn=mysqli_connect("localhost","root","","portals");
$contact=$_POST['updateStaffCnt'];
$username=$_SESSION['user'];
$sql="UPDATE staff SET contact='$contact' WHERE username='$username'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStaff.php");
}
?>