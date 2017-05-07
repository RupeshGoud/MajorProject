 <?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
		
	$sql = "SELECT * FROM `ispend`.`FCategories` WHERE `Email` = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result)) {
		array_push($response, array("CategoryName"=>$row[1], "CategoryType"=>$row[2]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>