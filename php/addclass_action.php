<?php
// Get teacher UserID
$UserID = $_SESSION['UserID'];
// Get teacher school
$school_result = mysql_query("SELECT * FROM Teacher WHERE (UserID='$UserID') LIMIT 1") or die(mysql_error());
$school = mysql_result($school_result,0,"school");

if(isset($_POST['submit'])){
	$error = array();

	// Class Name Check
	if(empty($_POST['classname'])){
		$error[] = 'Please enter a class name. ';
	}
	else
	{
		$classname = mysql_real_escape_string(preg_replace('/\s+/', '', $_POST['classname']));
	}

	// Number Students Check
	if(empty($_POST['nostudents'])){
		$error[] = 'Please select a number of students. ';
	}
	else
	{
		$nostudents = $_POST['nostudents'];
	}

	// Class Password Check
	if(empty($_POST['classpassword'])){
		$error[] = 'Please enter a default password for the class. ';
	}
	else
	{
		$classpassword = mysql_real_escape_string($_POST['classpassword']);
	}
	//Final error check if there is no error make changes else display error
	if(empty($error)){
		$result1 = mysql_query("INSERT INTO Teacher_Class (UserID,Class,NoStudents) VALUES ('$UserID','$classname','$nostudents')") or die(mysql_error());
		while ($nostudents > 0) {
			$result2 = mysql_query("INSERT INTO Student (StudentId,School,Class,Password,Forename,Surname) VALUES ('','$school','$classname','$classpassword','','')") or die(mysql_error());
			$nostudents --;
		}
	}
	else 
	{ 
		$error_message = '<span class="error">';
		foreach ($error as $key => $value) {
				$error_message.= "$value";
		}
		$error_message.='</span><br/><br/>';
	}


}



?>
