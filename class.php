<?php
include 'php/connect.php';
include 'php/class_functions.php';
//declarations for use in checking desired class
$c = $_GET['c'];
$u = $_GET['u'];
if ($_SESSION['UserID'] != $u) {
	header('Location:index.php');
}

function getStudents(){
	$c = $_GET['c'];
	$u = $_GET['u'];
	//pull specific teachers class tables from the mysql database
	$result = mysql_query("SELECT * FROM Teacher WHERE UserID='$u'") or die(mysql_error());
	if (mysql_num_rows($result) == 0) {
		echo "No data found!";
		echo 'User ID: '.$_GET['u'].'';
		echo 'Class: '.$_GET['c'].'';
	}
	else
	{
		$teacher_school = mysql_result($result,0,'School');
		//Teacher school test, working. echo $teacher_school;
	}
	//from the prior results the specific class is pulled
	$result2 = mysql_query("SELECT * FROM Student WHERE School='$teacher_school' AND Class='$c' ") or die(mysql_error());
	if (mysql_num_rows($result2) == 0) {
		echo "No class data found!";
	}
	else
	{
		while ($row = mysql_fetch_assoc($result2)){
			$studentid = $row["StudentID"];
			$school = $row["School"];
			$class = $row["Class"];
			$password = $row["Password"];
			$forename = $row["Forename"];
			$surname = $row["Surname"];

			echo         
			"<tr>",
        		"<td>",$studentid,"</td>", 
        		"<td>",$school,"</td>", 
        		"<td>",$class,"</td>", 
        		"<td>",$password,"</td>",
        		"<td>",$forename,"</td>",
        		"<td>",$surname,"</td>",
        		"<td></td>",
        		"<td></td>",
        		"<td></td>",
        		"<td></td>",
        		"<td></td>",
        		"<td></td>",
        		"<td></td>",
        	"</tr>";

		}
	}


}
?>

<!doctype html>
<html>
<head>
	<title>SESH | Class</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="js/slideout_menu.js"></script>

	<!-- PAGE INDEPENDANT SCRIPTS-->
	<link rel="stylesheet" type="text/css" href="css/class.css">

</head>
<body>
	<?php include('include/navigation.html'); ?>
	<div class="site-wrap">
		<div id="content_wrap">
		<!-- page content -->
		<?php include('include/menu_button.html'); ?>
			<div id="class_wrapper" class="content_box">
				<table class="class-table">
					<tr>
						<td>Student ID</td>
						<td>School</td>
						<td>Class</td>
						<td>Password</td>
						<td>Forename</td>
						<td>Surname</td>
						<td>Topic 1</td>
						<td>Topic 2</td>
						<td>Topic 3</td>
						<td>Topic 4</td>
						<td>Topic 5</td>
						<td>Topic 6</td>
						<td>Topic 7</td>
					</tr>
					<?php getStudents(); ?>
				</table>
			</div>
			<!--php to display errors-->
			<?php echo $error_message; ?>
			<!--div for adding or removing students-->
			<div id="function_wrap" class="content_box">
				<form id="addstudent" method="post" action="">
					<input type="submit" name="submit_addstudent" id="submit_addstudent" class="button" value="Add Student"/>
					<label for="username">Amount: </label>
            		<input type="text" class="input" id="value_addstudent" name="value_addstudent" maxlength="2"/>		
				</form>
				<form id="removestudent" method="post" action="">
					<input type="submit" name="submit_removestudent" id="submit_removestudent" class="button" value="Remove Student"/>
					<label for="username">Student ID: </label>
            		<input type="text" class="input" id="value_removestudent" name="value_removestudent" maxlength="6"/>	
				</form>
				<form id="deleteclass" method="post" action="">
					<input type="submit" name="deleteclass" id="deleteclass" class="button" value="Delete Class"/>
					<label for="username">Teacher Password: </label>
            		<input type="password" class="input" id="teacher_password" name="teacher_password" maxlength="40"/>	
				</form>
			</div>
		</div>
	</div>
</body>
</htmqqq	ql>