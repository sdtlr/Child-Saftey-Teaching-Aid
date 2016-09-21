<?php
include 'php/connect.php';
$UserID = $_SESSION['UserID'];
//declarations pulling user data from the mysql database
$result = mysql_query("SELECT * FROM Student WHERE StudentID='$UserID'") or die(mysql_error());
$forename = mysql_result($result,0,"Forename");

echo $forename;
//if the users details retuned as not empty the page will redirect them to the homepage
if (!empty($forename)) {
	header('Location:index.php');
}
//the following if statement is used to check errors in the details submitted by the user before their information is accepted
if (isset($_POST['submit'])) {
	
	//Forename
	if(empty($_POST['firstname'])){
		$error[] = 'Please enter your first name. ';
	}
	else if( ctype_alnum($_POST['firstname']) )
	{
		$firstname = mysql_real_escape_string($_POST['firstname']);
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
		$secondname = mysql_real_escape_string($_POST['surname']);
	}
	else
	{
		$error[] = 'Surname must consist of letters only. ';
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

	if(empty($error)){
		$query_forename = mysql_query("UPDATE Student SET Forename = '$firstname' WHERE  StudentID='$UserID'") or die(mysql_error()); 
		$query_surname = mysql_query("UPDATE Student SET Surname = '$secondname' WHERE StudentID='$UserID'") or die(mysql_error());
		$query_password = mysql_query("UPDATE Student SET Password = '$password' WHERE StudentID='$UserID'") or die(mysql_error());
		header('Location:index.php');
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

<!doctype html>
<html>
<head>
	<title>SESH | Details</title>
	<!--stylesheets-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--javascripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="js/slideout_menu.js"></script>

	<!-- PAGE INDEPENDANT SCRIPTS-->

</head>
<body>
	<?php include('include/navigation.html'); ?>

	<div class="site-wrap">
	<!--page content-->
		<div id="content_wrap">
			<?php include('include/menu_button.html'); ?>
			<form id="generalform" class="container" method="post" action="">
                <div id="page_title">
                    <h3>Add your details</h3>
                </div>
                <!--echo for error messages defined above-->
                <?php echo $error_message; ?>
                <!--divs for detail inputs-->
                <div class="field">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="input" id="firstname" name="firstname" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <div class="field">
                    <label for="surname">Last Name:</label>
                    <input type="text" class="input" id="surname" name="surname" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <div class="field">
                    <label for="password">Enter a new Password:</label>
                    <input type="password" class="input" id="password" name="password" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <div class="field">
                    <label for="password_verify">Confirm new Password:</label>
                    <input type="password" class="input" id="password_verify" name="password_verify" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <input type="submit" name="submit" id="submit" class="button" value="Update Your Details"/>
            </form>
		</div>
	</div>
</body>
</html>
