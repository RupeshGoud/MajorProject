 <?php
	require "../../init.php";
	
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	
	$sql = "SELECT * FROM FUsers WHERE Email = '$Email' AND Password = '$Password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$user["Email"] = $row["Email"];
		$user["Mobile"] = $row["Mobile"];
		$user["Name"] = $row["Name"];
		$user["Password"] = $row["Password"];
	}
	else
	{
		//echo "The email and password you entered don't match.";
	}
	
	echo json_encode($user);
?>