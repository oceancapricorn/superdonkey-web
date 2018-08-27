<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarCategoriesModel.php'; 
	$id = $_POST["id"];
	$title = $_POST["title"];
	$desc = $_POST["desc"];

	$obkat = new BarCategoriesModel();
	$kat = $obkat -> saveBarCategories($id,$title,$desc);


?>
