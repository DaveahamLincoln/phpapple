<?php
	session_start();
	$fullName=$_POST["fullName"];
	$emailAddress=$_POST["emailAddress"];
	$cwid=$_POST["cwid"];
	$livingOption=$_POST["livingOption"];
	$phoneNumber=$_POST["phoneNumber"];
	$mailingAddress=$_POST["mailingAddress"];
	$aCTSAT=$_POST["aCTSAT"];
	$otherTests=$_POST["otherTests"];
	$gpa=$_POST["gpa"];
	$transferCredit=$_POST["transferCredit"];
	$majorsMinors=$_POST["majorsMinors"];

	#Might consider validating the email/sending a confirmation email as part of QA.
?>