<?php

	$student_name = @trim(stripslashes($_POST['student_name'])); 
	$email = @trim(stripslashes($_POST['email']));
	$phone = @trim(stripslashes($_POST['phone']));
	$class_name = @trim(stripslashes($_POST['class_name']));
	$parent_name = @trim(stripslashes($_POST['parent_name'])); 
	$class_location = @trim(stripslashes($_POST['class_location'])); 
	$date_missed = @trim(stripslashes($_POST['date_missed'])); 
	$makeup_date = @trim(stripslashes($_POST['makeup_date'])); 

	$email_from = $email;
	$email_to = 'cherie@tompkinssport.com';//replace with your email

	$body = 'Student Name: ' . $student_name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Class Name: ' . $class_name . "\n\n" . 'Parent Name: ' . $parent_name . "\n\n" . 'Location: ' . $class_location . "\n\n" . 'Date Missed: ' . $date_missed . "\n\n" . 'Preferred Makeup Date: ' . $makeup_date;

	$success = @mail($email_to, $body, 'Student Name: ' . $student_name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Class Name: ' . $class_name . "\n\n" . 'Parent Name: ' . $parent_name . "\n\n" . 'Location: ' . $class_location . "\n\n" .  'Date Missed: ' . $date_missed . "\n\n" . 'Preferred Makeup Date: ' . $makeup_date);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contacting us. We value your business and will be in touch shortly!");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../promo.html"> 
</head>