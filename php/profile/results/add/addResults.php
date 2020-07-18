<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Add Results</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../../../img/portal_icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="../../../../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="../../../../js/validateSem5.js"></script>
</head>
<body style="background:#eee;">
<header>
	<nav class="navbar bg-white" style="padding-top:14px;padding-bottom:14px;box-shadow:0px 0px 6px rgba(0,0,0,0.4);">
		<a class="navbar-brand">Add&nbsp;Results</a>
		<ul class="navbar-nav"><li class="nav-item"><button class="btn btn-danger" onclick="window.close()">Close</button></li></ul>
	</nav>
</header><section class="container" style="margin-top:40px;">
<ul class="nav nav-tabs">
	<li class="nav-item lead">
		<a class="nav-link active" data-toggle="tab" style="color:#21589b;" href="#sem5">Semester 5</a>
	</li>
	<li class="nav-item lead">
		<a class="nav-link" data-toggle="tab" style="color:#21589b;" href="#sem6">Semester 6</a>
	</li>
</ul>
<div class="tab tab-content container col-md-8 text-center" style="margin-top:40px;">
	<div class="tab-pane container active bg-white" id="sem5" >
		<table class="table table-responsive container text-center"> 
			<form class="form container" method="post" action="push/pushSem5.php">
				<tbody class="text-center container">
					<tr><td>
						<input type="text" name="stdAddmission" id="std_Addmission" placeholder="Enter Addmission Number" class="col-md-6">
					</td></tr>
					<tr><td>
						<input type="text" name="bcePrac" id="bcePractical" placeholder="BCE Practical Marks" class="col-md-6">
					</td></tr>
					<tr><td>
						<input type="text" name="cnExt" id="cnExternal" placeholder="CN External Marks" class="col-md-3">
						<input type="text" name="cnInt" id="cnInternal" placeholder="CN Internal Marks" class="col-md-3">
						<input type="text" name="cnPrac" id="cnPractical" placeholder="CN Practical Marks" class="col-md-3">
					</td></tr>
					<tr><td>
						<input type="text" name="dbmsExt" id="dbmsExternal" placeholder="DBMS External Marks" class="col-md-3">
						<input type="text" name="dbmsInt" id="dbmsInternal" placeholder="DBMS Internal Marks" class="col-md-3">
						<input type="text" name="dbmsPrac" id="dbmsPractical" placeholder="DBMS Practical Marks" class="col-md-3">
					</td></tr>
					<tr><td>
						<input type="text" name="mpExt" id="mpExternal" placeholder="MP External Marks" class="col-md-3">
						<input type="text" name="mpInt" id="mpInternal" placeholder="MP Internal Marks" class="col-md-3">
						<input type="text" name="mpPrac" id="mpPractical" placeholder="MP Practical Marks" class="col-md-3">
					</td></tr>
					<tr><td>
						<input type="text" name="mmExt" id="mmExternal" placeholder="MM External Marks" class="col-md-4">
						<input type="text" name="mmInt" id="mmInternal" placeholder="MM Internal Marks" class="col-md-4">
					</td></tr>
					<tr><td>
						<input type="text" name="tcsExt" id="tcsExternal" placeholder="TCS External Marks" class="col-md-4">
						<input type="text" name="tcsInt" id="tcsInternal" placeholder="TCS Internal Marks" class="col-md-4">
					</td></tr>
					<tr><td>
						<input type="text" name="wtPrac" id="wtPractical" placeholder="WT Practical Marks" class="col-md-6">
					</td></tr>
					<tr><td><input type="submit" name="btnSubmit5" id="btnSubmitSem5" value="Send" class="btn">&nbsp;&nbsp;<input type="reset" name="btnResetSem" id="btnResetSem5" value="Reset" class="btn"></td></tr>
				</tbody>
			</form>
		</table>
	</div>
	<div class="tab-pane container" id="sem6">
	Coming Soon
	</div>
</div>
</section><br>
</body>
</html>