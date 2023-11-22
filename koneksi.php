<?php
    error_reporting(0);
	session_start();
	$host = "localhost";
	$username = "root";
	$password = "";
	$databasename = "loginpw1";
	$connection = mysqli_connect($host, $username, $password) or die (mysqli_error());
	mysql_select_db($databasename, $conection) or die (mysql_error());
?>