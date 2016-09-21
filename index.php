<?php
include 'php/connect.php';
?>

<!doctype html>
<html>
<head>
	<title>SESH | Home</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="js/slideout_menu.js"></script>
	<script src="js/shrink_tooltip.js"></script>

	<!-- PAGE INDEPENDANT SCRIPTS-->

</head>
<body>
	<?php include('include/navigation.html'); ?>

	<div class="site-wrap">
		<div id="content_wrap">
			<?php include('include/menu_button.html'); ?>
			<div id="page_title">
			Home Page
			</div>
			<div id="upper_wrapper" class="content_box">
			<h2> Welcome To SESH </h2>
			<h4> Security Education for Schools and Home - Select a topic and start learning... </h4>
			</div>
			<div id="lower_wrapper">
				<div id="info_box" class="content_box">
					<p>Welcome to Sesh.co.uk</p>
					<p></p>
				</div>
				<div id="twitter_box">
				<a class="twitter-timeline" href="https://twitter.com/hashtag/cybersecurity" data-widget-id="580400939921772544">#cybersecurity Tweets</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
					{js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>


