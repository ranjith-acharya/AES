<?php
	$to = $_POST['staffForgot'];
	$subject = "Forgot Password";
	$message = "These is a Test Mail";
	if(mail($to, $subject, $message)){
		header("location:../staff.html");
	}else{
		echo "Failed to Sent";
	}
?>