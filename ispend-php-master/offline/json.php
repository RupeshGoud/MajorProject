<?php
	$post_data = array(
	  'purchase' => array(
		array(
			'item_name' => "Moto G",
			'item_category' => "Electronics",
			'item_price' => "14000"
		),
		array(
			'item_name' => "Moto G",
			'item_category' => "Electronics",
			'item_price' => "14000"
		),
		array(
			'item_name' => "Moto G",
			'item_category' => "Electronics",
			'item_price' => "14000"
		),
		array(
			'item_name' => "Moto G",
			'item_category' => "Electronics",
			'item_price' => "14000"
		)
	  ),
	  'budget' => array(
		array(
			'food' => "Moto G",
			'entertainment' => "Electronics",
			'electronics' => "14000",
			'fashion' => "14000",
			'other' => "14000"
		),
		array(
			'food' => "Moto G",
			'entertainment' => "Electronics",
			'electronics' => "14000",
			'fashion' => "14000",
			'other' => "14000"
		),
		array(
			'food' => "Moto G",
			'entertainment' => "Electronics",
			'electronics' => "14000",
			'fashion' => "14000",
			'other' => "14000"
		),
		array(
			'food' => "Moto G",
			'entertainment' => "Electronics",
			'electronics' => "14000",
			'fashion' => "14000",
			'other' => "14000"
		),
		array(
			'food' => "Moto G",
			'entertainment' => "Electronics",
			'electronics' => "14000",
			'fashion' => "14000",
			'other' => "14000"
		)
	  )
);
	
	echo json_encode($post_data);
?>