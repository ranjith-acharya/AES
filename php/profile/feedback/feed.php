<?php
	session_start();
	$_SESSION['userName'];
	$_SESSION['userMail'];
?>
<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Feed Back - <?php echo $_SESSION['userName'];?></title>
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
<body style="background:#fafafa;">
<header>
	<nav class="navbar bg-white" style="padding-top:14px;padding-bottom:14px;box-shadow:0px 0px 6px rgba(0,0,0,0.4);">
		<a class="navbar-brand">Student&nbsp;Panel&nbsp;-&nbsp;Feed&nbsp;Back</a>
		<ul class="navbar-nav"><li class="nav-item"><button class="btn btn-danger" onclick="window.close()">Close</button></li></ul>
	</nav>
</header>
<section class="container col-md-8" style="margin-top:40px;">
	<ul class="nav nav-tabs">
		<li class="nav-item lead">
			<a class="nav-link active" style="color:#21589b;" data-toggle="tab" href="#admin">Admin</a>
		</li>
		<li class="nav-item lead">
			<a class="nav-link" style="color:#21589b;" data-toggle="tab" href="#staff">Staff</a>
		</li>
		<li class="nav-item lead">
			<a class="nav-link" style="color:#21589b;" data-toggle="tab" href="#hod">HOD</a>
		</li>
	</ul>
	<div class="tab tab-content text-center">
		<div class="tab-pane container active" id="admin" style="margin-top:40px;">
			<form class="form bg-white col-md-8 container" method="post" style="border-radius:4px;box-shadow:0px 0px 4px rgba(0,0,0,0.2);padding-top:16px;padding-bottom:16px;">
				<input type="text" name="stdFrom" id="stdFromMail" value="<?php echo $_SESSION['userMail'];?>" readonly class="col-md-10"><br><br>
				<input type="text" name="stdTo" id="stdToMail" value="mailexample000@gmail.com" readonly class="col-md-10"><br><br>
				<input type="text" name="stdSub" id="stdSubject" placeholder="Subject" class="col-md-10"><br><br>
				<textarea name="stdFeed" id="stdFeedBack" placeholder="Enter Your Feed" class="col-md-10"></textarea><br><br>
				<input type="submit" id="stdFeedSubmit" name="stdFeedSubmitData" value="Submit" class="btn">
			</form>
		</div>
		<div class="tab-pane container fade" id="staff" style="margin-top:40px;">
			<form class="form bg-white col-md-8 container" method="post" style="border-radius:4px;box-shadow:0px 0px 4px rgba(0,0,0,0.2);padding-top:16px;padding-bottom:16px;">
				<input type="text" name="stdFrom" id="stdFromMail" value="<?php echo $_SESSION['userMail'];?>" readonly class="col-md-10"><br><br>
				<select name="stdTo" id="stdToMailDrop" class="col-md-10">
					<option value="">-- Select Staff --</option>
					<option value="">Business Communication & Ethics</option>
					<option value="">Communication Network</option>
					<option value="">Database Management System</option>
					<option value="">Microprocessor</option>
					<option value="">Multimedia System</option>
					<option value="">TCS</option>
					<option value="">Web Design</option>
				</select><br><br>
				<input type="text" name="stdSub" id="stdSubject" placeholder="Subject" class="col-md-10"><br><br>
				<textarea name="stdFeed" id="stdFeedBack" placeholder="Enter Your Feed" class="col-md-10"></textarea><br><br>
				<input type="submit" id="stdFeedSubmit" name="stdFeedSubmitData" value="Submit" class="btn">
			</form>
		</div>
		<div class="tab-pane container fade" id="hod" style="margin-top:40px;">
			<form class="form bg-white col-md-8 container" method="post" style="border-radius:4px;box-shadow:0px 0px 4px rgba(0,0,0,0.2);padding-top:16px;padding-bottom:16px;">
				<input type="text" name="stdFrom" id="stdFromMail" value="<?php echo $_SESSION['userMail'];?>" readonly class="col-md-10"><br><br>
				<select name="stdTo" id="stdToMailDrop" class="col-md-10">
					<option value="">-- Select Head of Department --</option>
					<option value="">HOD of Automobile Engineering</option>
					<option value="">HOD of Computer Engineering</option>
					<option value="">HOD of Electronics Engineering</option>
					<option value="">HOD of Electronics & Telecommunication Engineering</option>
					<option value="">HOD of Information Technology</option>
					<option value="">HOD of Mechnical Engineering</option>
				</select><br><br>
				<input type="text" name="stdSub" id="stdSubject" placeholder="Subject" class="col-md-10"><br><br>
				<textarea name="stdFeed" id="stdFeedBack" placeholder="Enter Your Feed" class="col-md-10"></textarea><br><br>
				<input type="submit" id="stdFeedSubmit" name="stdFeedSubmitData" value="Submit" class="btn">
			</form>
		</div>
	</div>
</section>
</body>
</html>