<?php
	global $link;
	$item_type = $_POST['item_type'];
	$item_name = $_POST['item_name'];
	$item_characteristic = $_POST['item_characteristic'];
	$item_balance = $_POST['item_balance'];
	$item_movement = $_POST['item_movement'];
	$item_min_balance = $_POST['item_min_balance'];
	$item_cost = $_POST['item_cost'];
	$sql = "INSERT INTO production_items (item_type, item_name, item_characteristic, item_balance, item_movement, item_min_balance, item_cost) VALUES ($item_type, $item_name, $item_characteristic, $item_balance, $item_movement, $item_min_balance, $item_cost)";
    mysqli_query($link,$sql);


