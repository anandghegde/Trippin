<?php 

$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "anandheg_se"; 
// Place the password for the MySQL database here
$db_pass = "se123";
// Place the name for the MySQL database here
$db_name = "anandheg_se";

$con=mysql_connect($db_host,$db_username,$db_pass) or die(mysql_error());
mysql_select_db($db_name,$con) or die("no database by that name");
?>
