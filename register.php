<?php
include 'php/connect.php';
include 'php/register_action.php';
//if the user is logged in return to homepage
if(!empty($_SESSION['UserID'])){
header("Location:index.php");
}
?>

<!doctype html>
<html>
<head>
    <title>SESH | Register</title>
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--javascripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="js/slideout_menu.js"></script>

    <!-- PAGE INDEPENDANT SCRIPTS-->
    <link rel="stylesheet" type="text/css" href="css/register.css">

</head>
<body>
    <?php include('include/navigation.html'); ?>

    <div class="site-wrap">
        <div id="content_wrap">
            <div id="page_title">
                <h3>Register</h3>
            </div>
            <?php include('include/menu_button.html'); ?>
            <div id="register_container" class="content_box">
                <form id="generalform" class="container" method="post" action="">
                    <!--echo for error messages-->
                    <?php echo $error_message; ?>
                    <!--what follows are the inputs for registering as a teacher-->
                    <div class="field">
                        <label for="forename">Forename:</label>
                        <input type="text" class="input" id="forename" name="forename" maxlength="15"/>
                        <p class="hint">15 characters maximum</p>
                    </div>
                    <div class="field">
                        <label for="surname">Surname:</label>
                        <input type="text" class="input" id="surname" name="surname" maxlength="15"/>
                        <p class="hint">15 characters maximum</p>
                    </div>
                    <div class="field">
                        <label for="school">School:</label>
                        <select name="school">
                            <option value="">School...</option>
                            <option value="UOL">Universy of Lincoln</option>
                            <option value="OTH">Other (Not Listed)</option>
                        </select>
                        <p class="tool-tip slideIn right">Select Your School</p>
                    </div>
                    <div class="field">
                        <label for="email">Email:</label>
                        <input type="email" class="input" id="email" name="email" maxlength="40"/>
                        <p class="hint">40 characters maximum</p>
                    </div>
                    <div class="field">
                        <label for="password">Password:</label>
                        <input type="password" class="input" id="password" name="password" maxlength="20"/>
                        <p class="hint">20 characters maximum</p>
                    </div>
                    <div class="field">
                        <label for="password_verify">Confirm Password:</label>
                        <input type="password" class="input" id="password_verify" name="password_verify" maxlength="20"/>
                        <p class="hint">20 characters maximum</p>
                    </div>
                    <input type="submit" name="submit" id="submit" class="button" value="Register"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>