<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarItemsModel.php'; 
	$id = $_POST["id"];

	$obkat = new BarItemsModel();
	$kat = $obkat -> delItem($id);


?>