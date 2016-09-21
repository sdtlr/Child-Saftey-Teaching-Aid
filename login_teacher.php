<?php
include 'php/connect.php';
include 'php/login_teacher_action.php';
//if the user is logged in the page will redirect to the homepage
$userData='';
if(!empty($_SESSION['UserID'])){
header("Location:index.php");
}
?>
<?php
include 'php/connect.php';
?>

<!doctype html>
<html>
<head>
  <title>SESH | Login</title>
  <!--stylesheet-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="js/slideout_menu.js"></script>

  <!-- PAGE INDEPENDANT SCRIPTS-->
  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
  <?php include('include/navigation.html'); ?>
  <!--page content-->
  <div class="site-wrap">
    <div id="content_wrap">
      <?php include('include/menu_button.html'); ?>
      <div id="login_container" class="content_box">
      <!--div containing inputs for login-->
        <form id="generalform" class="container" method="post" action="">
          <div id="page_title">
            <h3>Login</h3>
          </div>
          <!--echo for login errors-->
          <?php echo $error_message; ?>
          <div class="field">
            <label for="email">Email:</label>
            <input type="email" class="input" id="email" name="email" maxlength="40"/>
          </div>
          <div class="field">
            <label for="password">Password:</label>
            <input type="password" class="input" id="password" name="password" maxlength="20"/>
          </div>
          <input type="submit" name="submit" id="submit" class="button" value="Log In"/>
          <a href="register.php" id="register_link" >Dont have an account?</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
