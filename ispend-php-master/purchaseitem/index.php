<?php
	require "../init.php";
	
	$Buyer = $_POST["Buyer"];
	$ItemName = $_POST["ItemName"];
	$ItemPrice = $_POST["ItemPrice"];
	$ItemCategory = $_POST["ItemCategory"];
	
	$sql = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`) VALUES (NULL, '$Buyer', '$ItemName', '$ItemPrice', '$ItemCategory');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Purchased!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>