<?php session_start();?>
<?php
$conn=mysqli_connect("localhost","root","","portals");
$userAdm = $_SESSION['userAddmission'];
$sql = "SELECT * FROM SEM5 WHERE addmission='$userAdm'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['addmission']==$userAdm){/*echo $row['bceprac'];*/}
?>
<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Results</title>
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
	</nav>
</header><section class="container" style="margin-top:40px;">
<div class="lead"><span class="font-weight-bold">Addmission Number&nbsp;:&nbsp;</span><?php echo$_SESSION['userAddmission'];?></div>
<div class="lead"><span class="font-weight-bold">Name&nbsp;:&nbsp;</span><?php echo$_SESSION['userName'];?></div>
<div class="lead"><span class="font-weight-bold">Branch&nbsp;:&nbsp;</span><span class="text-capitalize"><?php echo$_SESSION['userBranch'];?></span></div>
</section><section class="container" style="margin-top:30px;">
<button class="btn" style="color:#fff;background:#1976D2;" data-toggle="modal" data-target="#sem5">Semester 5</button>
<button class="btn" style="color:#fff;background:#1976D2;margin-left:12px;">Semester 6</button>
</section>
<div class="modal fade bg-dark" id="sem5">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Semester 5</h4><button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<table class="table table-responsive-lg table-bordered text-center">
					<thead class="bg-light lead"><tr><td>Subject Name</td><td>External</td><td>Internal</td><td>Practical</td></tr><thead>
					<tbody class="text-center container">
						<tr><td>Business Communication & Ethics</td><td>---</td><td>---</td><td><?php echo $row['bceprac'];?>/25</td></tr>
						<tr><td>Communication Networks</td><td><?php echo$row['cnext'];?>/80</td><td><?php echo$row['cnint'];?>/20</td><td><?php echo$row['cnprac'];?>/25</td><tr>
						<tr><td>Database Management System</td><td><?php echo$row['dbmsext'];?>/80</td><td><?php echo$row['dbmsint']?>/20</td><td><?php echo$row['dbmsprac'];?>/25</td></tr>
						<tr><td>Microprocessor</td><td><?php echo$row['mpext'];?>/80</td><td><?php echo$row['mpint'];?>/20</td><td><?php echo$row['mpprac'];?>/25</td></tr>
						<tr><td>Multimedia System</td><td><?php echo$row['mmext'];?>/80</td><td><?php echo$row['mmint'];?>/20</td><td>---</td></tr>
						<tr><td>Theory of Computer Science</td><td><?php echo$row['tcsext'];?>/80</td><td><?php echo$row['tcsint'];?>/20</td><td>---</td></tr>
						<tr><td>Web Technology</td><td>---</td><td>---</td><td><?php echo$row['wtprac'];?>/50</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>