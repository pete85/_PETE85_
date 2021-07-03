<?php
	   $dbhost = 'pete85com1.ipagemysql.com';
	   $dbuser = 'pete85';
	   $dbpass = 'T@deusz1306';
	   
	   $conn = new mysqli($dbhost, $dbuser, $dbpass, "trulysti_pete85portfolio");

	   if ($conn->connect_error) {
           echo "Error: Unable to connect to MySQL.";
           die("Connection failed: " . $conn->connect_error);
       }
?>
