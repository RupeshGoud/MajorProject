 <?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
		
	$sql = "SELECT * FROM `ispend`.`FTransactions` WHERE `Email` = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result)) {
		array_push($response, array("TransactionType"=>$row[2], "TransactionDate"=>$row[3], "TransactionCategory"=>$row[4], "TransactionAmount"=>$row[5], "TransactionDescription"=>$row[6]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>