<?php
	   $dbhost = 'pete85com1.ipagemysql.com';
	   $dbuser = 'pete85';
	   $dbpass = 'Vectr@19CDti';
	   
	   $conn = new mysqli($dbhost, $dbuser, $dbpass, "pete85portfolio");

	   if ($conn->connect_error) {
           echo "Error: Unable to connect to MySQL.";
           die("Connection failed: " . $conn->connect_error);
       }
?>
