<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>View all Students</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../img/portal_icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head><style>*{font-family:'Raleway',sans-serif;}::-webkit-scrollbar{width:4px;}::-webkit-scrollbar-thumb{background:#ccc;}</style>
<body>
<header class="container-fluid bg-light" style="padding-top:20px;padding-bottom:20px;">
	<a class="navbar-brand lead offset-md-1" style="color:#21589b;">View All Student</a>
	<button class="btn btn-danger offset-md-7" onclick="window.close()">Close Window</button>
</header>
<section class="container" style="margin-top:10px;">
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "portals";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	$sql = "SELECT * FROM student";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		echo "<div class='card card-body'>";
		echo "<div class='row'>";
		echo "<div class='col'><img src='../../img/student/avatar/".$row['avatar']."' class='rounded-circle' width='160px' height='160px'></div>";
		echo "<div class='col text-capitalize'>".$row['firstname']." ".$row['lastname']."<br><strong>Addmission No - </strong>".$row['addmission']."<br><strong>Branch - </strong>".$row['branch']."<br><strong>E-Mail ID - </strong><span class='text-lowercase'>".$row['mail']."</span><br><strong>Address - </strong>".$row['address']."<br><strong>Contact No - </strong>".$row['contact']."</div>";
		echo "</div></div><br>";
	}
?></section>
</body>
</html>