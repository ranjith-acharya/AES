<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","portals");
$stdAdd5 = $_POST['stdAdd5'];
$sql = "SELECT * FROM sem5 WHERE addmission='$stdAdd5'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['addmission']==$stdAdd5){echo "";}else{header("location:searchResults.php");}?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Sem 5 Results - <?php echo$row['addmission'];?></title>
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
	<section class="container col-md-8" style="margin-top:40px;">
		<div class="text-center lead">Addmission No - <?php echo$row['addmission'];?></div><br>
		<table class="table bg-white table-bordered table-responsive-lg">
			<thead class="lead text-center bg-light">
				<tr><td>Subject Name</td><td>External</td><td>Internal</td><td>Practical</td></tr>
			</thead>
			<tbody class="text-center">
				<tr><td>Business Communication & Ethics</td><td>---</td><td>---</td><td><?php echo$row['bceprac'];?>/25</td></tr>
				<tr><td>Communication Networks</td><td><?php echo$row['cnext'];?>/80</td><td><?php echo$row['cnint'];?>/20</td><td><?php echo$row['cnprac'];?>/25</td></tr>
				<tr><td>Database Management System</td><td><?php echo$row['dbmsext'];?>/80</td><td><?php echo$row['dbmsint'];?>/20</td><td><?php echo$row['dbmsprac'];?>/25</td></tr>
				<tr><td>Microprocessor</td><td><?php echo$row['mpext'];?>/80</td><td><?php echo$row['mpint'];?>/20</td><td><?php echo$row['mpprac'];?>/25</td></tr>
				<tr><td>Multimedia System</td><td><?php echo$row['mmext'];?>/80</td><td><?php echo$row['mmint'];?>/20</td><td>---</td></tr>
				<tr><td>Theory of Computer Science</td><td><?php echo$row['tcsext'];?>/80</td><td><?php echo$row['tcsint'];?>/20</td><td>---</td></tr>
				<tr><td>Web Technology</td><td>---</td><td>---</td><td><?php echo$row['wtprac'];?>/50</td></tr>
			</tbody>
		</table>
	</section>
</body>
</html>