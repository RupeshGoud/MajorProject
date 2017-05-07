<?php
	require "../init.php";
	
	$Email = $_POST["Email"];
	$Food = $_POST["Food"];
	$Entertainment = $_POST["Entertainment"];
	$Electronics = $_POST["Electronics"];
	$Fashion = $_POST["Fashion"];
	$Other = $_POST["Other"];
	$Total = $_POST["Total"];
	
	$sql = "UPDATE `ispend`.`Budget` SET `Food` = '$Food', `Entertainment` = '$Entertainment', `Electronics` = '$Electronics', `Fashion` = '$Fashion', `Other` = '$Other', `Total` = '$Total' WHERE `Email` = '$Email';";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Budget set";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>