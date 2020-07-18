<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="portals";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
// if($conn->connect_error){
	// echo "ERROR - 404";
// }else{
	// echo "Connected";
// }
$mail=$_POST['staffMail'];
$pass=$_POST['staffPass'];
$sql="SELECT * FROM staff WHERE mail='$mail' AND pass='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($mail=="" && $pass==""){
	header('location:../../staff.html');
}if($row['mail']==$mail && $row['pass']==$pass){
	session_start();
	$_SESSION['user']=$row['username'];
	$_SESSION['userName']=$row['firstname']."&nbsp;".$row['lastname'];
	$_SESSION['userMail']=$row['mail'];
	$_SESSION['userAddress']=$row['address'];
	$_SESSION['userAvatar']=$row['avatar'];
	$_SESSION['userContact']=$row['contact'];
	$_SESSION['userBirth']=$row['birth'];
	$_SESSION['userGender']=$row['gender'];
	$_SESSION['userBranch']=$row['branch'];
}else{
	header('location:../../staff.html');
}
?>
<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title><?php echo $_SESSION['userName'];?></title>
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
	<a class="navbar-brand offset-md-2">Staff&nbsp;Panel</a>
	<button class="bg-white navbar-toggler" data-toggle="collapse" data-target="#collapseNav"><i class="fa fa-bars text-dark"></i></button>
	<div class="collapse navbar-collapse" id="collapseNav">
		<ul class="navbar-nav offset-md-8">
			<li class="nav-item">
				<div class="dropdown">
				<button class="btn bg-white dropdown-toggle" data-toggle="dropdown" style="background:#fafafa;"><i class="fa fa-cogs lead" style="font-size:px;"></i></button>
				<div class="dropdown-menu">
					<a href="search/searchStudent.php" target="_blank" class="dropdown-item">Search</a>
					<a href="update/updateStaff.php" target="_blank" class="dropdown-item">Update Info</a>
					<a href="results/searchResults.php" target="_blank" class="dropdown-item">View Results</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="staffLogout.php">Logout</a>
				</div>
				</div>
			</li>
		</ul>
	</div>
	</nav>
</header><br>
<section class="bg-white container" style="border-radius:4px;padding-top:16px;padding-bottom:16px;">
	<div class="row">
		<div class="col-md-4 container offset-md-1">
			<img src="../../img/teacher/avatar/<?php echo $_SESSION['userAvatar'];?>" width="180" class="img-thumbnail rounded-circle img-fluid" style="margin-top:40px;">
		</div>
		<div class="col container">
			Hello, <div class="text-uppercase lead"><?php echo $_SESSION['userName']; ?></div>
			<div class="lead"><span class="font-weight-bold">Username&nbsp;:&nbsp;</span><?php echo $_SESSION['user']; ?></div>
			<div class="text-capitalize lead font-weight-bold">Faculty&nbsp;of&nbsp;:&nbsp;<?php echo $_SESSION['userBranch']; ?></div>
			<div class="text-lowercase lead font-weight-bold"><?php echo $_SESSION['userMail']; ?></div>
			<div class="text-capitalize lead"><?php echo $_SESSION['userAddress']; ?></div>
			<div class="text-capitalize lead"><span class="font-weight-bold">Contact No</span>&nbsp;:&nbsp;<?php echo $_SESSION['userContact']; ?><br><span class="font-weight-bold">Birth</span>&nbsp;:&nbsp;<?php echo $_SESSION['userBirth'];?><br><span class="font-weight-bold">Gender</span>&nbsp;:&nbsp;<?php echo $_SESSION['userGender'];?></div>
		</div>
	</div>
</section>
</body>
</html>