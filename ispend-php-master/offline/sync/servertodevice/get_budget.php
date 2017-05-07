 <?php
	require "../../../init.php";
	
	$Email = $_POST["Email"];
	
	$sql = "SELECT * FROM Budget WHERE Email = '$Email';";
	
	$result = mysqli_query($conn, $sql);
	
	$budget = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$budget["Food"] = $row["Food"];
		$budget["Entertainment"] = $row["Entertainment"];
		$budget["Electronics"] = $row["Electronics"];
		$budget["Fashion"] = $row["Fashion"];
		$budget["Other"] = $row["Other"];
		$budget["Total"] = $row["Total"];
		$budget["BudgetSetAt"] = $row["BudgetSetAt"];
		$budget["UploadedTime"] = $row["UploadedTime"];
		$budget["UploaderMAC"] = $row["UploaderMAC"];
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($budget);
?>