<?php 
error_reporting(0);
#session_start();
if(!$_REQUEST) exit;

///////////////////////////////////////////////////////////////////////////

	// Simple Configuration Options
	
	// Enter the email address that you want to emails to be sent to.
	// Example $address = "joe.doe@yourdomain.com";
	
    $address = 'subhadeeps.mukherjee@gmail.com';
	
	$email    = mysql_real_escape_string(trim($_REQUEST['email']));
	/*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header('location:../booknow.php?msg=<div class="error">Please enter a valid email.</div>'); 
	}*/
	$name	  = mysql_real_escape_string(trim($_REQUEST['fname']));
	/*if (!ctype_space($name)) {
		header('location:../booknow.php?msg=<div class="error">Please enter a valid name.</div>'); 
	}*/
	$gender	  = mysql_real_escape_string(trim($_REQUEST['gender']));
	$phone	  = mysql_real_escape_string(trim($_REQUEST['phone']));
	/*if(!preg_match("/^[1-9][0-9]*$/", $phone)) {
		header('location:../booknow.php?msg=<div class="error">Please enter a valid mobile no.</div>'); 
	}*/
	$time	  = mysql_real_escape_string(trim($_REQUEST['treatment_day']))."/".mysql_real_escape_string(trim($_REQUEST['treatment_month']))."/".mysql_real_escape_string(trim($_REQUEST['treatment_year']))." at ".mysql_real_escape_string(trim($_REQUEST['time']));
	$treatment = mysql_real_escape_string(trim($_REQUEST['treatment']));
	
	$subject  = "New Request for Appoinment from {$name} to the Service <b>{$treatment}<b/> ";
    $comments = addslashes(strip_tags(mysql_real_escape_string(trim($_REQUEST['comments']))));

         // Advanced Configuration Option.
		 // You can change this if you feel that you need to.
		 // Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
					
		 $msg  = "You have received new request for the treatment {$treatment} {$name}\r\n\n";
		 $msg .= "Name 		: {$name}\r\n\n";
 		 $msg .= "Gender 	: {$gender}\r\n\n";
		 $msg .= "Email		: {$email}\r\n\n";
 		 $msg .= "Phone No	: {$phone}\r\n\n";
		 $msg .= "Time 		: {$time}\r\n\n";
		 $msg .= "Treatment : {$treatment}\r\n\n";
		 $msg .= "Comments :$comments\r\n\n";
		 $msg .= "You can contact $name via Phone No:, $phone.\r\n\n";
		 $msg .= "-------------------------------------------------------------------------------------------\r\n";
		 
		if(@mail($address, $subject, $msg, "From: $email\r\nReturn-Path: $email\r\n"))
		{
			 header('location:../booknow.php?msg=<div class="correct">Your message has been successfully sent, we will get back to you shortly.<div>');
		 }
		 else
		 {
			 header('location:../booknow.php?msg=<div class="error">There is a problem in system please contact administrator.</div>');
		 }
?>