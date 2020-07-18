<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "portals";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	$mail = $_POST['adminMail'];
	$pass = $_POST['adminPass'];
	$sql = "SELECT * FROM admin WHERE mail='$mail' AND pass='$pass'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($mail=="" && $pass==""){
		header("location:../../admin.html");
	}
	if($row['mail']==$mail && $row['pass']==$pass){
		session_start();
		$_SESSION['userName'] = $row['name'];
		$_SESSION['userMail'] = $row['mail'];
		$_SESSION['userAddress'] = $row['address'];
		$_SESSION['userAvatar'] = $row['avatar'];
	}else{
		header("location:../../admin.html");
	}
?>
<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Welcome <?php echo $_SESSION['userName']; ?></title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../img/portal_icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background:#eee;"><header>
	<nav class="navbar navbar-expand-md bg-white" style="padding-top:14px;padding-bottom:14px;box-shadow:0px 0px 6px rgba(0,0,0,0.4);">
	<a class="navbar-brand offset-md-2"><?php echo $_SESSION['userName'];?>&nbsp;Panel</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapseNav"><i class="fa fa-bars text-dark"></i></button>
	<div class="collapse navbar-collapse" id="collapseNav">
		<ul class="navbar-nav offset-md-8">
			<li class="nav-item">
				<div class="dropdown">
				<button class="btn dropdown-toggle bg-white" data-toggle="dropdown"><i class="fa fa-cogs lead" style="font-size:px;"></i></button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="adminLogout.php">Logout</a>
				</div>
				</div>
			</li>
		</ul>
	</div>
	</nav>
</header><br>
<section class="container bg-white" style="border-radius:4px;padding-top:16px;padding-bottom:16px;">
	<div class="row">
		<div class="col-md-4 container offset-md-1">
			<img src="../../img/<?php echo $_SESSION['userAvatar'];?>" height="100" width="114" style="margin-top:2%;" class="img-fluid">
		</div>
		<div class="col container">
			Hello, <div class="text-uppercase lead"><?php echo $_SESSION['userName']; ?></div>
			<div class="text-lowercase lead font-weight-bold"><?php echo $_SESSION['userMail']; ?></div>
			<div class="text-capitalize lead"><?php echo $_SESSION['userAddress']; ?></div>
		</div>
	</div>
</section><br>
<section class="container table-responsive">
<table class="table table-bordered text-center" style="box-shadow:0px 0px 8px rgba(0,0,0,0.1);border-radius:4px;">
		<thead class="lead" style="background:#fff;"><tr><th>Add</th><th>Result</th><th>Search</th><th>Update</th><th>View all</th></tr></thead>
		<tbody>
		<tr><td><a href="../add/addStaff.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Add Details"><button class="btn" style="background:#1976D2;color:#fff;">Staff</button></a></td><td><span class="text-secondary"> ------- </span></td><td><a href="search/searchStaff.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Search Staff"><button class="btn" style="background:#1976D2;color:#fff;">Staff</button></a></td><td><a href="update/updateStaffAdmin.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Update Details"><button class="btn" style="background:#1976D2;color:#fff;">Staff</button></a></td><td><a href="viewAllStaff.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="View Staff"><button class="btn" style="background:#1976D2;color:#fff;">Staff</button></a></td></tr>
		<tr><td><a href="../add/addStudent.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Add Details"><button class="btn" style="background:#1976D2;color:#fff;">Student</button></a></td><td><a href="results/add/addResults.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Add Results"><button class="btn" style="background:#1976D2;color:#fff;">Student</button></a></td><td><a href="search/searchStudent.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Search Students"><button class="btn" style="background:#1976D2;color:#fff;">Student</button></a></td><td><a href="update/updateStdAdmin.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Update Students"><button class="btn" style="background:#1976D2;color:#fff;">Student</button></a></td><td><a href="viewAllStudent.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="View Students"><button class="btn" style="background:#1976D2;color:#fff;">Student</button></a></td></tr>
		<tr><td>-------</td><td><a href="results/searchResults.php" target="_blank" data-toggle="tooltip" class="link" data-placement="right" title="Search Result"><button class="btn" style="background:#1976D2;color:#fff;">Search</button></a></td><td>-------</td><td>-------</td><td>------</td></tr>
		</tbody>
</table></section></body><script>$(document).ready(function(){$("[data-toggle='tooltip']").tooltip();});</script></html>