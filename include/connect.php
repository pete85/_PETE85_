<?php
	   $dbhost = 'localhost';
	   $dbuser = 'u606334355_pete85';
	   $dbpass = 'T@deusz1306';
	   $dbname = 'u606334355_pete85';
	   
	   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	   if ($conn->connect_error) {
           echo "Error: Unable to connect to MySQL.";
           die("Connection failed: " . $conn->connect_error);
       }
?>
