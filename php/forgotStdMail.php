<?php
	$to = $_POST['stdForgot'];
	$subject = "Forgot Password";
	$message = "These is a Test Mail";
	if(mail($to, $subject, $message)){
		header("location:../student.html");
	}else{
		echo "Failed to Sent";
	}
?>