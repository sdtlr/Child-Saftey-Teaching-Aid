<?php
if(isset($_POST['submit'])){
	$error = array();
	
	//Forename
	if(empty($_POST['forename'])){
		$error[] = 'Please enter your first name. ';
	}
	else if( ctype_alnum($_POST['forename']) )
	{
		$forename = mysql_real_escape_string($_POST['forename']);
	}
	else
	{
		$error[] = 'Forename must consist of letters only. ';
	}

	//Surname
	if(empty($_POST['surname'])){
		$error[] = 'Please enter your last name. ';
	}
	else if( ctype_alnum($_POST['surname']) )
	{
		$surname = mysql_real_escape_string($_POST['surname']);
	}
	else
	{
		$error[] = 'Surname must consist of letters only. ';
	}

	//School
	if(empty($_POST['school'])){
		$error[] = 'Please enter your school. ';
	}
	else if( ctype_alnum($_POST['school']) )
	{
		$school = mysql_real_escape_string($_POST['school']);
	}
	else
	{
		$error[] = 'School must consist of letters only. ';
	}

	//Email
    if(empty($_POST['email'])){
        $error[] = 'Please enter your email. ';
    }
    else if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email']))
    {
		$email = mysql_real_escape_string($_POST['email']);
    }
    else
    {
		$error[] = 'Your e-mail address is invalid. ';
    }
	
	//Password
	if(empty($_POST['password'])){
		$error[] = 'Please enter a password. ';
	}
	if ($_POST['password'] != $_POST['password_verify'])
	{
		$error[] = 'Passwords do not match. ';
	}
	else
	{
		$password = mysql_real_escape_string($_POST['password']);
	}
	//If there is no error the system will commit the changes if there is an error the system will display the error instead
	if(empty($error)){
		$result = mysql_query("SELECT * FROM Teacher WHERE EMAIL='$email'") or die(mysql_error());
		if(mysql_num_rows($result)==0){
			//0 Results returned therefore available.
      		$result1 = mysql_query("INSERT INTO Teacher (UserID,Forename,Surname,School,Email,Password) VALUES ('','$forename','$surname','$school','$email','$password')") or die(mysql_error());
      		if(!$result1) {
        		echo "Somethings broken...";
        	}
        	else
        	{
        		header('Location:prompt.php?x=0');
        	}
		}
		else
		{
			header('Location:prompt.php?x=1');
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
