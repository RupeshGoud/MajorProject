 <?php
	require "../../../init.php";
	
	$Email = $_POST["Email"];
	$UploaderMAC = $_POST["UploaderMAC"];
	$UploaderMAC = $_POST["UploaderMAC"];
	$LastDownloadTime = $_POST["LastDownloadTime"];
		
	$sql = "SELECT * FROM `ispend`.`Purchases` WHERE `Buyer` = '$Email' AND `UploadedTime` > '$LastDownloadTime' AND `UploaderMAC` NOT LIKE '$UploaderMAC';";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("ItemName"=>$row[2], "ItemPrice"=>$row[3], "ItemCategory"=>$row[4], "PurchaseTime"=>$row[5]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>