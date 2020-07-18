<!DOCTYPE HTML>
<html lang="en-IN">
<head>
	<title>Add Staff - DataBase</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../img/portal_icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/validateAddStaff.js"></script>
</head><body style="background:#fafafa;">
<section style="margin-top:20px;border-radius:5px;box-shadow:0px 0px 8px rgba(0,0,0,0.1);" class="bg-white container col-md-6 text-center">
	<form class="form text-center container" method="POST" action="push/staff.php" enctype="multipart/form-data" style="padding-top:20px;padding-bottom:20px;">
		<input type="text" name="username" id="usernamebox" placeholder="Username" class="col-md-8"><br><br>
		<span class="form form-inline"><input type="text" name="firstName" id="fnamebox" placeholder="First Name" class="col-md-6">
		<input type="text" name="lastName" id="lnamebox" placeholder="Last Name" class="col-md-6"></span><br>
		<input type="text" name="mailAddr" id="mailbox" placeholder="Enter E-Mail Address" class="col-md-12"><br><br>
		<input type="text" name="pass" id="passbox" placeholder="Enter Password" class="col-md-12"><br><br>
		<textarea name="addr" id="addrbox" placeholder="Enter Address" class="col-md-12"></textarea><br><br>
		<input type="date" name="birth" id="birthbox" class="col-md-12"><br><br>
		<input type="tel" name="contact" id="contactbox" class="col-md-12" placeholder="Enter Contact Number"><br><br>
		<select name="branch" id="branchbox" class="col-md-12">
			<option value="">-- Select Branch --</option>
			<option value="automobile engineering">Automobile Engineering</option>
			<option value="computer engineering">Computer Engineering</option>
			<option value="electronics engineering">Electronics Engineering</option>
			<option value="electronics & telecommunication">Electronics & Telecommunication</option>
			<option value="information technology">Information Technology</option>
			<option value="mechanical engineering">Mechanical Engineering</option>
		</select><br><br>
		<select name="gender" id="genderbox" class="col-md-12">
			<option value="">-- Select Gender --</option>
			<option value="female">Female</option>
			<option value="male">Male</option>
		</select><br><br>
		<input type="file" name="avatar" id="avatarbox" accept="image/*" class="col-md-12"><br><br>
		<input type="submit" name="staffData" id="staffDataSubmit" value="Submit Staff Data" class="btn">
		<br><br><button class="btn btn-danger" onclick="window.close()">Close Window</button>
	</form>
</section><br><hr class="lead col-md-8 container" color="#ccc">
<footer class="lead text-center">
	&copy; All Rights Reserved
</footer><br>
</body>
</html>