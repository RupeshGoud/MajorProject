<?php
	require "../init.php";
	
	$sql = $_GET["query"];
	
	if(mysqli_query($conn, $sql)) {
		echo "Query executed successfully";
	}
	else {
		echo "Query not executed";
	}
?>