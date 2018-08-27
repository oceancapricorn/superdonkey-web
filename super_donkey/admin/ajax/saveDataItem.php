<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarItemsModel.php'; 
	$id = $_POST["id"];
	$title = $_POST["title"];
	$desc = $_POST["desc"];
	$kat = $_POST["kat"];
	$price = $_POST["price"];

	$obkat = new BarItemsModel();
	$kat = $obkat -> saveBarItem($id,$title,$desc,$kat,$price);

?>
