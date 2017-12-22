<?php
	   $dbhost = 'pete85com1.ipagemysql.com';
	   $dbuser = 'pete85';
	   $dbpass = 'Vectr@19CDti';
	   
	   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	   
	   if(! $conn ) {
	      die('Could not connect: ' . mysql_error());
	   }
		
		mysql_select_db("pete85portfolio", $conn);
?>