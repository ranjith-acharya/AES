<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title></title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../../img/portal_icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="../../../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background:#eee;">
<header>
	<nav class="navbar bg-white" style="padding-top:14px;padding-bottom:14px;box-shadow:0px 0px 6px rgba(0,0,0,0.4);">
		<a class="navbar-brand">Search&nbsp;Staff</a>
		<ul class="navbar-nav"><li class="nav-item"><button class="btn btn-danger" onclick="window.close()">Close</button></li></ul>
	</nav>
</header>
<section class="container col-md-8 text-center" style="margin-top:40px;">
	<form method="post" class="form container col-md-8 bg-white" style="border-radius:4px;box-shadow:0px 0px 4px rgba(0,0,0,0.2);padding-top:16px;padding-bottom:16px;">
		<input type="text" name="staffName" placeholder="Enter Staff Name to Search" id="staffSearch" class="col-md-8">
		<input type="submit" name="staffSearchBtn" id="staffBtn" class="btn" value="Search">
</form></section><script>$(document).ready(function(){$("#staffBtn").click(function(){var staffSearchName = $("#staffSearch").val();var alpha = /^([a-zA-Z]{1,})$/;if(staffSearchName==""){$("#staffSearch").css({"border-color":"#cd201f","transition":".5s"});$("#staffSearch").focus();return false;}if(alpha.test(staffSearchName)==false){$("#staffSearch").css({"border-color":"#cd201f","transition":".5s"});$("#staffSearch").focus();return false;}});});</script></body></html>
<?php
error_reporting(0);$conn=mysqli_connect("localhost","root","","portals");
$staffQ=$_POST['staffName'];
$sql="SELECT * FROM staff WHERE firstname LIKE '%$staffQ%' OR lastname LIKE '%$staffQ%'";
$result=mysqli_query($conn,$sql);
if(!$_POST['staffSearchBtn']){
	echo "";
}else{
	while($row=mysqli_fetch_array($result)){
		echo "<br><div class='container col-md-8 bg-white' style='padding-top:10px;padding-bottom:10px;border-radius:4px;'><div class='row'>";
		echo "<div class='col-md-4 container offset-md-1'><img src='../../../img/teacher/avatar/".$row['avatar']."' width='160px' class='rounded-circle'></div>";
		echo "<div class='col container'><br><span class='text-uppercase lead'> ".$row['firstname']."&nbsp;".$row['lastname']."</span><br><span class='font-weight-bold text-capitalize lead'>Faculty of&nbsp;:&nbsp;".$row['branch']."&nbsp;Department</span><br><span class='font-weight-bold lead text-lowercase'>".$row['mail']."</span><br><span class='font-weight-bold text-capitalize lead'>Contact No&nbsp;:&nbsp;</span><span class='lead'>".$row['contact']."</span></div>";
		echo "</div></div>";
	}//else{
		// echo "<br><div class='container col-md-4 text-danger text-center lead text-capitalize'>'&nbsp;".$staffQ."&nbsp;'&nbsp;No such name found</div>";
	// }
}
?>