<?php
	define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
	define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
	define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
	define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));

	$db_host = constant("DB_HOST"); // Host name 
	$db_username = constant("DB_USER"); // Mysql username 
	$db_password = constant("DB_PASS"); // Mysql password 
	$db_name = constant("DB_NAME"); // Database name 
	
	$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	
	if(!$conn)
	{
		//echo "Connection failed...".mysqli_connect_error();
	}
	else
	{
		//echo "Connected!";
	}
?>