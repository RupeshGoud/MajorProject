 <?php
	require "../init.php";
	
	$Email = $_POST["Email"];
	
	$budget = array();
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Food FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Food';";
	$result = mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Food"] = $row["Food"];
	}
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Entertainment FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Entertainment';";
	$result = mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Entertainment"] = $row["Entertainment"];
	}
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Electronics FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Electronics';";
	$result = mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Electronics"] = $row["Electronics"];
	}
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Fashion FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Fashion';";
	$result = mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Fashion"] = $row["Fashion"];
	}
	
	$sql1 = "SELECT SUM(`ItemPrice`) AS Other FROM `Purchases` WHERE `Buyer` = '$Email' AND `ItemCategory` = 'Other';";
	$result = mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$budget["Other"] = $row["Other"];
	}
	
	$sql = "SELECT * FROM Budget WHERE Email = '$Email';";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$budget["TFood"] = $row["Food"];
		$budget["TEntertainment"] = $row["Entertainment"];
		$budget["TElectronics"] = $row["Electronics"];
		$budget["TFashion"] = $row["Fashion"];
		$budget["TOther"] = $row["Other"];
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($budget);
?>