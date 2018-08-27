<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarCategoriesModel.php'; 
	$id = $_POST["id"];

	$obkat = new BarCategoriesModel();
	$kat = $obkat -> getBarCategoriesOne($id);
	$result = $kat[0]["cat_title"] . "||" .$kat[0]["cat_desc"];
	echo($result);

?>