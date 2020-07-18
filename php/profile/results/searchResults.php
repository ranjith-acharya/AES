<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Search for Results</title>
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
		<a class="navbar-brand">View&nbsp;Results</a>
		<ul class="navbar-nav"><li class="nav-item"><button class="btn btn-danger" onclick="window.close()">Close</button></li></ul>
</nav></header>
<section class="container" style="margin-top:40px;">
<ul class="nav nav-tabs">
	<li class="nav-item lead">
		<a class="nav-link active" href="#sem5" data-toggle="tab" style="color:#21589b;">Semester 5</a>
	</li>
	<li class="nav-item lead">
		<a class="nav-link" href="#sem6" data-toggle="tab" style="color:#21589b;">Semester 6</a>
	</li>
</ul><div class="tab tab-content container">
	<div class="tab-pane container active col-md-8 text-center bg-white" style="margin-top:40px;padding-top:16px;padding-bottom:16px;" id="sem5">
		<span class="lead">View Semester 5 Result</span>
		<form method="post" class="form" action="viewResultSem5.php">
			<input type="text" name="stdAdd5" id="stdAddmission5" placeholder="Enter Student Addmission No. to View Result" class="col-md-8">
			<input type="submit" name="stdBtn5" id="btn5" value="Search" class="btn">
		</form>
	</div>
	<div class="tab-pane container col-md-8 text-center bg-white" style="margin-top:40px;padding-top:16px;padding-bottom:16px;" id="sem6">
		<span class="lead">View Semester 6 Result</span>
		<form method="post" class="form">
			<input type="text" name="stdAdd6" id="stdAddmission6" placeholder="Enter Student Addmission No. to View Result" class="col-md-8">
			<input type="submit" name="stdBtn6" id="btn6" value="Search" class="btn">
		</form>
	</div>
</div></section><script>$(document).ready(function(){$("#btn5").click(function(){var stdAddm=$("#stdAddmission5").val();var alpha=/^([A-Z0-9]){1,}$/;if(stdAddm==""){$("#stdAddmission5").css({"borderColor":"#cd201f","transition":".5s"});$("#stdAddmission5").focus();return false;}if(alpha.test(stdAddm)==false){$("#stdAddmission5").css({"borderColor":"#cd201f","transition":".5s"});$("#stdAddmission5").focus();return false;}});$("#btn6").click(function(){var stdAddm=$("#stdAddmission6").val();var alpha=/^([A-Z0-9]){1,}$/;if(stdAddm==""){$("#stdAddmission6").css({"borderColor":"#cd201f","transition":".5s"});$("#stdAddmission6").focus();return false;}if(alpha.test(stdAddm)==false){$("#stdAddmission6").css({"borderColor":"#cd201f","transition":".5s"});$("#stdAddmission6").focus();return false;}});});</script></body></html>