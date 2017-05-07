<?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
	$Mobile = $_POST["Mobile"];
	$Name = $_POST["Name"];
	$Password = $_POST["Password"];
	
	$sql = "INSERT INTO Users(Email, Mobile, Name, Password) VALUES('$Email', '$Mobile', '$Name', '$Password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>