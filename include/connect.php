<?php
	   $dbhost = 'localhost';
	   $dbuser = 'trulysti_pete85portfolio';
	   $dbpass = 'T@deusz1306';
	   $dbname = 'trulysti_pete85portfolio';
	   
	   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	   if ($conn->connect_error) {
           echo "Error: Unable to connect to MySQL.";
           die("Connection failed: " . $conn->connect_error);
       }
?>
