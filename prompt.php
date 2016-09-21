<?php
include 'php/connect.php'; 
//declaration drawing alert number
$x = $_GET['x'];
//function which outputs a message based on the alert number
function createMessage($x){
	if(is_numeric($x)){
		switch ($x) {
			case '0':
				$message = "Your account is now active! Go and <a href=\"login_teacher.php\"> Login</a>";
				break;

			case '1':
				$message = "That email or username has already been used, <a href=\"login.php\">login</a> or <a href=\"register.php\">register</a> with a different username / email.</a>";
				break;

			case '2':
				$message = "Thank you, your class has been deleted.";
				break;
		}

		echo $message;
	}
}

?>

<?php
include 'php/connect.php';
?>

<!doctype html>
<html>
<head>
	<title>SESH | Update</title>
	<!--stylesheet-->
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
	<!--page content-->
	<div class="site-wrap">
		<div id="content_wrap">
			<?php include('include/menu_button.html'); ?>
			<?php createMessage($x); ?>
		</div>
	</div>
</body>
</html>


