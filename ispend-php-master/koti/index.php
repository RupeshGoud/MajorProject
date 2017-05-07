<?php
require "../init.php";        
$sqlUsers = "SELECT Email FROM Users;";
$email = "";
$offers = "";
$purchase = "";
$response = array();
$resultUsers = mysqli_query($conn, $sqlUsers);
if (mysqli_num_rows($resultUsers) > 0) {
	while ($rowUsers = mysqli_fetch_assoc($resultUsers)) {
		if (filter_var($rowUsers["Email"], FILTER_VALIDATE_EMAIL)) {
			$email = $rowUsers["Email"];
			//$sqlPurchase = "SELECT ItemPrice, ItemCategory FROM Purchases WHERE Buyer = '$email' ORDER BY ItemPrice desc LIMIT 1;";		
			$sqlPurchase = "SELECT ItemCategory, HighestPrice FROM (SELECT ItemCategory, SUM(ItemPrice) as HighestPrice FROM Purchases  WHERE Buyer = '$email' GROUP BY ItemCategory) T  ORDER BY HighestPrice desc LIMIT 1;";			
			$resultPurchase = mysqli_query($conn, $sqlPurchase);
			if (mysqli_num_rows($resultPurchase) > 0) {
				$rowPurchase = mysqli_fetch_assoc($resultPurchase);
				if ($rowPurchase["HighestPrice"] != 0) {
					$purchase = $rowPurchase["ItemCategory"];
					//echo nl2br ("Highest price is : ".$rowPurchase["HighestPrice"]." for the category ".$rowPurchase["ItemCategory"]." for the email ".$rowUsers["Email"]."\n");
					$sqlOffers = "SELECT Offer FROM Offers WHERE Category = '$purchase';";
					$resultOffers = mysqli_query($conn, $sqlOffers);
					$body = "";
					if (mysqli_num_rows($resultOffers) > 0) {
						while ($rowOffers = mysqli_fetch_assoc($resultOffers)) {
							$body .= $rowOffers["Offer"] . "\n";
						}
						array_push($response, array("Email" => $rowUsers["Email"], "Body" => $body));
					} else {
						//echo nl2br("No results in Offers Table\n");
					}
				} else {
				   // echo nl2br("Purchase Something\n");
				}
			} else {
			   // echo nl2br("No results in Purchase Table\n");
			}
		} else {
			//echo nl2br("Enter a Valid Email\n");
		}
	}
} else {
	//echo nl2br("No results in Users Table\n");
}
echo json_encode(array("server_response" => $response));
?>