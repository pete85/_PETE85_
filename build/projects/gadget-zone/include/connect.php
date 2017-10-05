<?php
	$host="pete85com1.ipagemysql.com"; // Host name
	$username="pete85"; // Mysql username
	$password="Vectr@19CDti"; // Mysql password
	$db_name="gadget_zone"; // Database name

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
?>