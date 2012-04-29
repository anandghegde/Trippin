<?php 

$db_host = "mysql1.alwaysdata.com";
// Place the username for the MySQL database here
$db_username = "anandghegde"; 
// Place the password for the MySQL database here
$db_pass = "se123";
// Place the name for the MySQL database here
$db_name = "anandghegde_se";

mysql_connect("$db_host","$db_username","$db_pass") or die(mysql_error());
mysql_select_db("$db_name") or die("no database by that name");
?>
