<?php
include 'php/connect.php';
include 'php/addclass_action.php';
?>

<!doctype html>
<html>
<head>
	<title>SESH | Add Class</title> <!--Loading style sheets-->
	<link rel="stylesheet" type="text/css" href="css/main.css"><!-- Loading javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><!-- Loading includes for menu bar -->
	<script src="js/slideout_menu.js"></script>

	<!-- PAGE INDEPENDANT SCRIPTS-->

</head>
<body><!-- Page Content -->
	<?php include('include/navigation.html'); ?>
	<div class="site-wrap">
		<div id="content_wrap">
            <?php include('include/menu_button.html'); ?>
			<form id="generalform" class="container" method="post" action="">
                <div id="page_title">
                    <h3>Register</h3>
                </div>
                <?php echo $error_message; ?>
                <!-- Divs containing inputs for entering the information required to create a class -->
                <div class="field">
                    <label for="classname">Class Name:</label>
                    <input type="text" class="input" id="classname" name="classname" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <div class="field">
                    <label for="nostudents">Number of students:</label>
                   	<select required name="nostudents">
                        <?php for ($i=0; $i <= 24 ; $i++) : ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <div class="field">
                    <label for="classpassword">Class Password:</label>
                    <input type="password" class="input" id="classpassword" name="classpassword" maxlength="20"/>
                    <!--<p class="hint">15 characters maximum</p>-->
                </div>
                <input type="submit" name="submit" id="submit" class="button" value="Add Class"/>
            </form>
		</div>
	</div>
</body>
</html>
