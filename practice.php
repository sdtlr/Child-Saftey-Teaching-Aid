<?php
include 'php/connect.php';
?>

<!doctype html>
<html>
<head>
	<title>SESH | Good Security Practice</title><!-- Loading style sheets -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/topic.css"><!-- Loading javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><!-- Loading includes for menu bar -->
	<script src="js/slideout_menu.js"></script>
	<script src="js/shrink_tooltip.js"></script>

	<!-- PAGE INDEPENDANT SCRIPTS-->

</head>
<body>
	<?php include('include/navigation.html'); ?>
<!-- page content -->
	<div class="site-wrap">
		<div id="content_wrap">
			<?php include('include/menu_button.html'); ?>
			<div id="page_title">
			Good Security Practice
			</div>
			<div id="info_box" class="content_box">
			<p><h2><b>Password security</b></h2></p>
			<p><h3><b>What is password security?</b></h3></p>
			<img align="right" height="133" width="200" src="images/keyboard.jpg" />
			<p>Having a strong password helps keep all of your online accounts safe. Short passwords are easier to
			guess or hack, as are passwords based on personal information (birthday, name of a pet, etc). It is
			suggested that you create passwords which have a range of numbers (1,2,3,4,5), lower-case letters
			(a,b,c,d), upper-case letters (A,B,C,D) and even symbols (#,@,*,$,%).</p>
			<p><h3><b>How do you increase password security?</b></h3></p>
			<p>In addition to the above advice, the following tactics will help increase your password security:</p>
			<ul>
			<li>Use different passwords for different systems (if one password is guessed, the rest are still
			secure)</li>
			<li>Use a mixture of uppercase and lowercase letters, in addition to numbers and symbols.</li>
			<li>Use longer passwords (8+ characters) that are easy to remember but hard to guess.</li>
			<li>Avoid creating passwords based on personal information (birthday, the name of a pet, etc).</li>
			<li>Make sure no one watches you enter your password.</li>
			<li>Ensure you log out of your account if using a public computer, or you leave your device lying
			around.</li>
			<li>Never share your passwords, even with friends.</li>
			<li>Always have a backup email address on your accounts, in case you are ever hacked. This will
			mean you can always get your account back.</li>
			<li>If in doubt, consider using a password creator to generate a strong password for you.</li>
			<li>Change your password regularly - the longer a password is active the higher the chance of
			hackers finding it. It is best to change a password every few months.</li>
			</ul>
			<p><h2><b>HTTPS</b></h2></p>
			<p><h3><b>What is HTTPS?</b></h3></p>
			<img align="right" height="179" width="300" src="images/https.png" />
			<p>HTTPS is the secure version of HTTP. This basically means that any information sent between you
			and a website is secure so that no one can read what was sent.</p>
			<p><h3><b>How do you use HTTPS?</b></h3></p>
			<p>You should ensure that the website you are visiting and entering your details into is secured with
			HTTPS, this is indicated by a green padlock and the website address will contain the letters HTTPS://
			in the left hand side of the website address bar. HTTPS is particularly important when shopping
			online or using online banking.</p>
			<p><h2><b>Micro-transactions</b></h2></p>
			<p><h3><b>What are micro-transactions?</b></h3></p>
			<img align="right" height="137" width="220" src="images/microt.jpg" />
			<p>A micro-transaction is something which can happen within apps on tablets and phones. Often in
			games you can have the option to use real money to get in game money. These mini-transactions
			can build up to large amounts of money without you realising if many purchases are made, causing
			large charges to parent's credit cards.</p>
			<p><h3><b>How do you prevent micro-transactions?</b></h3></p>
			<p>A password can be set up so that any in-app purchases must be authorised by this password.
			Another method is to turn off the in-app purchasing option which can be found in the settings on
			most phones and tablets. The last method would be to remove all card details from the app stores
			so that no spending can happen.</p>
			</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
