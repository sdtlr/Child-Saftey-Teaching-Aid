<?php
if(isset($_POST['submit'])){
	$error = array();
	
	// EMail Check
    if(empty($_POST['email'])){
        $error[] = 'Please enter your email. ';
    }
    else if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email']))
    {
		$email = mysql_real_escape_string($_POST['email']);
    }else{
		$error[] = 'The e-mail address you entered is invalid.';
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
		$result = mysql_query("SELECT * FROM Teacher WHERE Email='$email' AND Password='$password' ") or die(mysql_error());
		if(mysql_num_rows($result)==1){
			while($row = mysql_fetch_array($result)){
				$_SESSION['UserID'] = $row['UserID'];
				$_SESSION['AccType'] = "T";
			}
			header('Location:index.php');
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