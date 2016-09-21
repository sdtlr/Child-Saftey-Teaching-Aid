<?php
include 'php/connect.php';
?>

<!doctype html>
<html>
<head>
	<title>SESH | Hacking</title>><!-- Loading style sheets -->
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
			Hacking
			</div>
			<div id="info_box" class="content_box">
			<p><h2><b>Denial of Service attack</b></h2></p>
			<p><h3><b>What is a Denial of service attack?</b></h3></p>
			<img align="right" height="134" width="200" src="images/DDOS.jpg" />
			<ul>
			<li>A Denial of Service (DoS) attack is where a single hacker sends a lot of information to a
			webpage with the hope of taking it down.</li>
			<li>A Distributed Denial of Service (DDoS) attack is where a group of hackers sends a lot of
			information to a webpage with the hope of taking it down.</li>
			<li>There is only so much traffic that a webpage can hold and once this amount has been
			reached the website will slow down and stop.</li>
			<li>As a DDoS attack requires several computers to achieve. The hackers will take over
			computers and use these in their attack. One of these computers could be yours.</li>
			</ul>
			<p><h3><b>How to avoid being involved in a Denial of service attack?</b></h3></p>
			<ul>
			<li>Don't install suspicious software from the internet before checking that it's safe. A hacker can
			hijack your computer to use in a denial of service attack.</li>
			<li>Run a virus scan on your computer regularly, viruses have many uses one of which is allowing a
			hacker to access your computer and potentially use it in a denial of service attack.</li>
			<li>If a friend or group approaches you and tries to get you to take part in a DDoS attack DO NOT.
			DDoS attacks are highly illegal and there are cases where people who have taken part in in such
			attacks have been banned from using computers for many years or worse put in prison.</li>
			</ul>
			<p><h2><b>WIFI Spoofing</b></h2></p>
			<p><h3><b>What is Wi-Fi Spoofing?</b></h3></p>
			<img align="right" src="images/wifi.png" />
			<p>Wi-Fi Spoofing is the act of impersonating a wireless access point for a network. When you connect
			to a network with your phone, tablet or computer/laptop without using a cable you are connecting
			“wirelessly” when you do this your phone, tablet or computer/laptop asks the network for access 
			and if you are allowed then you will be connected. Hackers can set up mini networks which look just
			like another normal network to you and your computer but once you've connected if you send any
			information over the network (such as logging into a website) the hacker can see it which means
			they could pretend to be you online!</p>
			<p>How to prevent Wi-Fi spoofing attacks:</p>
			<ul>
			<li>If there is a network you connect to often it may seem easier to tell your phone or tablet to
			automatically connect to the network, consider logging in each time instead to give yourself a
			chance to check the networks information first.</li>
			<li>If your device is set up to connect to a specific network and it can't, but when you check for
			networks you see a network with the same name, check its details first. If you haven't
			automatically connected to it when you expected it could be a fake network, make sure it's the
			one you think it is.</li>
			<li>Wi-Fi networks very rarely have their settings changed, if a network you're familiar with
			suddenly changes and you aren't expecting it (such as if a network which needs a password
			suddenly doesn't) check with the owner of the network, someone might be wifi spoofing their
			network.</li>
			</ul>
			<p><h2><b>Keystroke Loggers</b></h2></p>
			<p><h3><b>What are Keystroke Loggers</b></h3></p>
			<img align="right" height="150" width="150" src="images/keylogger.jpg" />
			<p>Keystroke loggers are pieces of software or devices which are used to record the button presses of a
			keyboard. A software key logger will log the signals entering the computer from the keyboard and a
			hardware key logger can be either built into the keyboard or connected between the keyboard cable
			and the computer to record the signals that way. Key loggers can be used by hackers to see
			everything you type including passwords and login details, someone with that kind of information
			can make your life very difficult.</p>
			<p>How can you prevent keystroke logging?</p>
			<ul>
			<li>Software key loggers are a kind of malware and as such will often be caught by anti-virus
			software, make sure to run your anti-virus software regularly in order to catch these programs
			before your information is stolen.</li>
			<li>Avoid using the same passwords for different systems, a key logger can record anything you type
			which can give a hacker access to your login details, if you have different login details for
			different websites the hacker won't be able to use one websites login on another slowing down
			anything they may try to do giving you a better chance to spot their actions early.</li>
			<li>Be wary of keyboards sold from suspicious sources, and if you use a computer with an
			attachment between the keyboard cable and the computer do not log into anything on that
			computer before checking if it is a key logger.</li>
			</ul>
			</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
