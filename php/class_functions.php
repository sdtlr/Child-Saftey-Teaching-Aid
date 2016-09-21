<?php
$UserID = $_SESSION['UserID'];
$c = $_GET['c'];
$u = $_GET['u'];

// Add Student(s) Function
if (isset($_POST['submit_addstudent'])) {
	$error = array();

	// Amount Check
	if(empty($_POST['value_addstudent'])){
		$error[] = 'Please enter a number of students to add. ';
	}
	else
	{
		$value_addstudent = $_POST['value_addstudent'];
	}

	// Get school value from teacher
	$result = mysql_query("SELECT * FROM Teacher WHERE UserID='$UserID'") or die(mysql_error());
	if (mysql_num_rows($result) == 0) {
		echo "No school found!";
	}
	else
	{
		$school = mysql_result($result,0,'School');
	}
	
	if(empty($error)){
		while ($value_addstudent > 0) {
			$result2 = mysql_query("INSERT INTO Student (StudentId,School,Class,Password,Forename,Surname) VALUES ('','$school','$c','password','','')") or die(mysql_error());
			$value_addstudent --;
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

// Remove Student Funtion
if (isset($_POST['submit_removestudent'])) {
	$error = array();

	// ID Check
	if(empty($_POST['value_removestudent'])){
		$error[] = 'Please enter a student ID. ';
	}
	else
	{
		$value_removestudent = $_POST['value_removestudent'];
	}

	// Add check if student number in database otherwise output error.

	// Get school value from teacher
	$result = mysql_query("SELECT * FROM Teacher WHERE UserID='$UserID'") or die(mysql_error());
	if (mysql_num_rows($result) == 0) {
		echo "No school found!";
	}
	else
	{
		$school = mysql_result($result,0,'School');
	}

	// Check if student is in teacher shcool and class.
	$result = mysql_query("SELECT * FROM Student WHERE StudentID='$value_removestudent'") or die(mysql_error());
	$studentschool = mysql_result($result,0,'School');
	$studentclass = mysql_result($result,0,'Class');
	
	if ($school != $studentschool || $studentclass != $c) {
		$error[] = 'Student is not in this class. ';
	}
	
	
	if(empty($error)){

		$result3 = mysql_query("DELETE FROM Student WHERE StudentID='$value_removestudent' LIMIT 1") or die(mysql_error());
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


// Delete Class Function
if (isset($_POST['deleteclass'])) {
	$error = array();

	// Password Check
	if(empty($_POST['teacher_password'])){
		$error[] = 'Please enter your password to confirm. ';
	}
	else
	{
		$teacher_password = mysql_real_escape_string($_POST['teacher_password']);
	}

	if(empty($error)){
		$result4 = mysql_query("SELECT * FROM Teacher WHERE UserID='$u' AND Password='$teacher_password' ") or die(mysql_error());
		if(mysql_num_rows($result4)==1){
			// Get School from teacher
			$result = mysql_query("SELECT * FROM Teacher WHERE UserID='$UserID'") or die(mysql_error());
			if (mysql_num_rows($result) == 0) {
				echo "No school found!";
			}
			else
			{
				$school = mysql_result($result,0,'School');
			}
			$query_deleteclass = mysql_query("DELETE FROM Student WHERE Class='$c' AND School='$school'") or die(mysql_error());
			$query_deleteclassteacher = mysql_query("DELETE FROM Teacher_Class WHERE Class='$c' AND UserID='$u'") or die(mysql_error());
			header('Location:prompt.php?x=2');
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