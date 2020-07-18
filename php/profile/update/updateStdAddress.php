<?php
session_start();
$_SESSION['userAddmission'];
?>
<?php
$conn=mysqli_connect("localhost","root","","portals");
$address=$_POST['updateStdAdd'];
$addmission=$_SESSION['userAddmission'];
$sql="UPDATE student SET address='$address' WHERE addmission='$addmission'";
if(mysqli_query($conn,$sql)){
	echo "<script>window.close()</script>";
}else{
	header("location:updateStd.php");
}
?>