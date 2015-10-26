<?php
	$firstName = $_POST[“Firstname”];
	$middleName = $_POST[“Middlename”];
	$lastName = $_POST[“Lastname”];
	$gender = $_POST[“Gender”];
	// Birthday
	$month = $_POST[“Month”];
	$day= $_POST[“Day”];
	$year= $_POST[“Year”];
	// Program and student type
	$program = $_POST[“Program”];
	$studentType= $_POST[“StudentType”];
	$address = $_POST[“__________”];
?>
First Name: <strong><?php echo $Firstname; ?></strong><br />
Middle Name: <strong><?php echo $Middlename; ?></strong><br />
Last Name: <strong><?php echo $Lastname; ?></strong><br />
Gender: <strong><?php echo $Gender; ?></strong><br />
Birthday: <strong><?php echo ___________________; ?></strong><br />
Program: <strong><?php echo _________; ?></strong><br />
Student Type: <strong><?php echo _________; ?></strong><br />
Address: <pre><?php echo _________; ?></pre><br />
