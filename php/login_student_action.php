<?php
if(isset($_POST['submit'])){
	$error = array();
	
	// Username Check
	if(empty($_POST['username'])){
		$error[] = 'Please enter a username. ';
	}
	else
	{
		$username = mysql_real_escape_string($_POST['username']);
	}

	// Password Check
	if(empty($_POST['password'])){
		$error[] = 'Please enter a password. ';
	}
	else
	{
		$password = mysql_real_escape_string($_POST['password']);
	}

	//If there is no error the system will commit the changes if there is an error the system will display the error instead
	if(empty($error)){
		$result = mysql_query("SELECT * FROM Student WHERE StudentID='$username' AND Password='$password' ") or die(mysql_error());
		if(mysql_num_rows($result)==1){
			while($row = mysql_fetch_array($result)){
				$_SESSION['UserID'] = $row['StudentID'];
				$_SESSION['AccType'] = "S";
			}
			header('Location:student_details.php');
		}
		else
		{
			$error_message = '<span class="error">Username or password is incorrect</span>';
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