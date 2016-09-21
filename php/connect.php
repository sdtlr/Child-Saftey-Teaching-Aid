<!--code for connecting to database-->
<?php
error_reporting(0);
session_start();
$mysql_host = "localhost";
$mysql_database = "cs17main";
$mysql_user = "root";
$mysql_password = "";

//the system will attempt to draw the data from the server if it cannot an error message displays
$connect = mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(!$connect){
	die( 'Could not connect'.mysql_error() );
}
//the system will attempt to pull the database from the server if it cannot an error message displays
$db_selected = mysql_select_db($mysql_database);
if(!$db_selected){
	die( 'Could not select database'.mysql_error() );
}

?>


