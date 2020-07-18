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
$mail=$_POST['stdMail'];
$pass=md5(mysqli_real_escape_string($_POST['stdPass']));
$sql="SELECT * FROM student WHERE mail='$mail' AND pass='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($mail=="" && $pass==""){
	header('location:../../student.html');
}
if($row['mail']==$mail && $row['pass']==$pass){
	session_start();
	$_SESSION['userAddmission']=$row['addmission'];
	$_SESSION['userName']=$row['firstname']."&nbsp;".$row['lastname'];
	$_SESSION['userMail']=$row['mail'];
	$_SESSION['userAddress']=$row['address'];
	$_SESSION['userAvatar']=$row['avatar'];
	$_SESSION['userContact']=$row['contact'];
	$_SESSION['userBirth']=$row['birth'];
	$_SESSION['userGender']=$row['gender'];
	$_SESSION['userBranch']=$row['branch'];
}else{
	header('location:../../student.html');
}
if(!isset($_session['userName'])){
	header('location:../../student.html');
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
	<a class="navbar-brand offset-md-2">Student&nbsp;Panel</a>
	<button class="bg-white navbar-toggler" data-toggle="collapse" data-target="#collapseNav"><i class="fa fa-bars text-dark"></i></button>
	<div class="collapse navbar-collapse" id="collapseNav">
		<ul class="navbar-nav offset-md-8">
			<li class="nav-item">
				<div class="dropdown">
				<button class="btn bg-white dropdown-toggle" data-toggle="dropdown" style="background:#fafafa;"><i class="fa fa-cogs lead" style="font-size:px;"></i></button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="feedback/feed.php" target="_blank">FeedBack</a>
					<a class="dropdown-item" href="results/results.php" target="_blank">Results</a>
					<a class="dropdown-item" href="search/searchStaff.php" target="_blank">Search</a>
					<a class="dropdown-item" href="update/updateStd.php" target="_blank">Update Info</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="stdLogout.php">Logout</a>
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
			<img src="../../img/student/avatar/<?php echo $_SESSION['userAvatar'];?>" width="180" class="img-thumbnail rounded-circle img-fluid" style="margin-top:50px;">
		</div>
		<div class="col container">
			Hello, <div class="text-uppercase lead"><?php echo $_SESSION['userName']; ?>.</div>
			<div class="text-capitalize lead font-weight-bold">Addmission No&nbsp;:&nbsp;<?php echo $_SESSION['userAddmission']; ?>.</div>
			<div class="text-capitalize lead font-weight-bold">Branch Name&nbsp;:&nbsp;<?php echo $_SESSION['userBranch'];?>.</div> 
			<div class="text-lowercase lead font-weight-bold"><?php echo $_SESSION['userMail']; ?>.</div>
			<div class="text-capitalize lead"><?php echo $_SESSION['userAddress']; ?>.</div>
			<div class="text-capitalize lead"><span class="font-weight-bold">Contact No</span>&nbsp;:&nbsp;<?php echo $_SESSION['userContact']; ?><br><span class="font-weight-bold">Birth</span>&nbsp;:&nbsp;<?php echo $_SESSION['userBirth'];?><br><span class="font-weight-bold">Gender</span>&nbsp;:&nbsp;<?php echo $_SESSION['userGender'];?></div>
		</div>
	</div>
</section>
<!--<br><div class="text-center">
	<a href="feedback/feed.php" target="_blank"><button class="btn lead" style="background:#21589b;color:#fff;">FeedBack</button></a>
	<a href="search/searchStaff.php" target="_blank"><button class="btn lead" style="background:#21589b;color:#fff;">Search</button></a>
	<a href="update/updateInfo.php" target="_blank"><button class="btn lead" style="background:#21589b;color:#fff;">Update Info</button></a>
</div>-->
</body>
</html>