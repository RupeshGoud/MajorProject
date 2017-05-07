 <?php
	require "../init.php";
	
	$Email = $_POST["Email"];
	
	$sql1 = "SET GLOBAL `time_zone` = '+05:30';";
	mysqli_query($conn, $sql1);
	
	$sql = "SELECT * FROM Purchases WHERE Buyer = '$Email' AND ItemName IS NOT NULL";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("ItemName"=>$row[2], "ItemPrice"=>$row[3], "ItemCategory"=>$row[4], "PurchaseTime"=>$row[5]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>