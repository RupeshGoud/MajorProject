<?php
	require "../../init.php";
	
	$postdata = file_get_contents("php://input"); 
	$data = json_decode($postdata, true);

	if (is_array($data['purchases'])) {
	  foreach ($data['purchases'] as $record) {
		$Buyer = $record['Buyer'];
		$ItemName = $record['ItemName'];
		$ItemPrice = $record['ItemPrice'];
		$ItemCategory = $record['ItemCategory'];
		$PurchaseTime = $record['PurchaseTime'];
		$UploadedTime = $record['UploadedTime'];
		$UploaderMAC = $record['UploaderMAC'];
		
		$sql1 = "INSERT INTO `ispend`.`Purchases` (`PurchaseID`, `Buyer`, `ItemName`, `ItemPrice`, `ItemCategory`, `PurchaseTime`, `UploadedTime`, `UploaderMAC`) VALUES (NULL, '$Buyer', '$ItemName', '$ItemPrice', '$ItemCategory', '$PurchaseTime', '$UploadedTime', '$UploaderMAC');";
		if(mysqli_query($conn, $sql1)) {
			echo "yes";
		}
		else {
			echo "no";
		}
	  }
   }
?>