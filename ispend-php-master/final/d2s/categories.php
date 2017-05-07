<?php
	require "../../init.php";
	
	$postdata = file_get_contents("php://input"); 
	$data = json_decode($postdata, true);

	if (is_array($data['categories'])) {
	  foreach ($data['categories'] as $record) {
		$Email = $record['Email'];
		$CategoryName = $record['CategoryName'];
		$CategoryType = $record['CategoryType'];
		
		$sql1 = "INSERT INTO `ispend`.`FCategories` (`Email`, `CategoryName`, `CategoryType`) VALUES ('$Email', '$CategoryName', '$CategoryType');";
		if(mysqli_query($conn, $sql1)) {
			echo "yes";
		}
		else {
			echo "no";
		}
	  }
   }
?>