<?php
	require "../../init.php";
	
	$postdata = file_get_contents("php://input"); 
	$data = json_decode($postdata, true);

	if (is_array($data['transactions'])) {
	  foreach ($data['transactions'] as $record) {
		$Email = $record['Email'];
		$TransactionType = $record['TransactionType'];
		$TransactionDate = $record['TransactionDate'];
		$TransactionCategory = $record['TransactionCategory'];
		$TransactionAmount = $record['TransactionAmount'];
		$TransactionDescription = $record['TransactionDescription'];
		
		$sql1 = "INSERT INTO `ispend`.`FTransactions` (`Email`, `TransactionType`, `TransactionDate`, `TransactionCategory`, `TransactionAmount`, `TransactionDescription`) VALUES ('$Email', '$TransactionType', '$TransactionDate', '$TransactionCategory', '$TransactionAmount', '$TransactionDescription');";
		if(mysqli_query($conn, $sql1)) {
			echo "yes";
		}
		else {
			echo "no";
		}
	  }
   }
?>

