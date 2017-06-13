<?php
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'strict';

	$dbConnect = mysql_connect($dbHost, $dbUser, $dbPass);
	$dbSelected = mysql_select_db($dbName, $dbConnect);
	$dbSetLang = mysql_query("SET NAMES 'utf8'");  
?>