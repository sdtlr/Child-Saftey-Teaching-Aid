<!--php to logout user when opened-->
<?php
session_start();

session_destroy();

header('Location: index.php');
?>