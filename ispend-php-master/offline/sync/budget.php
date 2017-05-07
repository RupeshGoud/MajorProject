<?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
	$Food = $_POST["Food"];
	$Entertainment = $_POST["Entertainment"];
	$Electronics = $_POST["Electronics"];
	$Fashion = $_POST["Fashion"];
	$Other = $_POST["Other"];
	$Total = $_POST["Total"];
	$BudgetSetAt = $_POST["BudgetSetAt"];
	$UploadedTime = $_POST["UploadedTime"];
	$UploaderMAC = $_POST["UploaderMAC"];
	
	$sql = "SELECT * FROM Budget WHERE Email = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$sql1 = "UPDATE `ispend`.`Budget` SET `Food` = '$Food', `Entertainment` = '$Entertainment', `Electronics` = '$Electronics', `Fashion` = '$Fashion', `Other` = '$Other', `Total` = '$Total', `BudgetSetAt` = '$BudgetSetAt', `UploadedTime` = '$UploadedTime', `UploaderMAC` = '$UploaderMAC' WHERE `Email` = '$Email';";
	
		if(mysqli_query($conn, $sql1))
		{
			echo "Budget set";
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
	else
	{
		$sql2 = "INSERT INTO `ispend`.`Budget`(`Email`, `Food`, `Entertainment`, `Electronics`, `Fashion`, `Other`, `Total`, `BudgetSetAt`, `UploadedTime`, `UploaderMAC`) VALUES('$Email', '$Food', '$Entertainment', '$Electronics', '$Fashion', '$Other', '$Total', '$BudgetSetAt', '$UploadedTime', '$UploaderMAC');";
	
		if(mysqli_query($conn, $sql2))
		{
			echo "Budget set";
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
?>