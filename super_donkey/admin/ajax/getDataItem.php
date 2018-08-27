<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarItemsModel.php'; 
	$id = $_POST["id"];

	$obkat = new BarItemsModel();
	$kat = $obkat -> getItem($id);
	$result = $kat[0]["title"] . "||" .$kat[0]["description"] . "||" . $kat[0]["cat_id"]."||".$kat[0]["price"];
	echo($result);

?>