<?php
	session_start();
	$_SESSION['user'];
	$_SESSION['userName'];
	$_SESSION['userBranch'];
?>
<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Update Information</title>
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
		<a class="navbar-brand">Update&nbsp;Information</a>
		<ul class="navbar-nav"><li class="nav-item"><button class="btn btn-danger" onclick="window.close()">Close</button></li></ul>
	</nav>
</header>
<section class="container" style="margin-top:2%;">
	<div class="lead">Username&nbsp;:&nbsp;<?php echo $_SESSION['user'];?></div>
	<div class="lead text-capitalize">Faculty&nbsp;of&nbsp;:&nbsp;<?php echo $_SESSION['userBranch'];?></div>
	<div class="lead text-capitalize">Name&nbsp;:&nbsp;<?php echo $_SESSION['userName'];?></div>
</section><br>
<section class="container">
<div class="row bg-white text-center" style="padding-top:2%;padding-bottom:2%;box-shadow:0px 0px 8px rgba(0,0,0,0.1);border-radius:6px;">
<div class="col-md-6 container">
<form method="POST" action="updateStaffAddress.php" class="form container">
	<div class="lead text-capitalize">Change Address</div><br>
	<textarea name="updateStaffAdd" id="staffAddress" placeholder="Type Address to Change" class="col-md-8" rows="5"></textarea><br><br>
	<input type="submit" name="updateAdd" id="btnAdd" class="btn btn-success">
</form></div><div class="col container" style="margin-top:2.5%;">
	<form method="POST" action="updateStaffContact.php" class="form container">
	<div class="lead text-capitalize">Change Contact Number</div><br><br>
	<input type="text" name="updateStaffCnt" id="staffContact" placeholder="Type Contact to Change" class="col-md-8"><br><br>
	<input type="submit" name="updateCnt" id="btnCnt" class="btn btn-success">
</form></div></div></section><script>$(document).ready(function(){$("#btnAdd").click(function(){var address=$("#staffAddress").val();if(address==""){$("#staffAddress").css({"borderColor":"#cd201f","transition":".5s"});$("#staffAddress").focus();return false;}});$("#btnCnt").click(function(){var contact=$("#staffContact").val();var number=/^([0-9]){1,}$/;if(contact==""){$("#staffContact").css({"borderColor":"#cd201f","transition":".5s"});$("#staffContact").focus();return false;}if(number.test(contact)==false){$("#staffContact").css({"borderColor":"#cd201f","transition":".5s"});$("#staffContact").focus();return false;}if(contact.length>10 || contact.length<10){$("#staffContact").css({"borderColor":"#cd201f","transition":".5s"});$("#staffContact").focus();return false;}});});</script></body></html>