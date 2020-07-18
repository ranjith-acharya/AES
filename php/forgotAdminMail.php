<?php
	$to = $_POST['adminForgot'];
	$subject = "Forgot Password";
	$message = "These is a Test Mail";
	if(mail($to, $subject, $message)){
		header("location:../admin.html");
	}else{
		echo "Failed to Sent";
	}
?>