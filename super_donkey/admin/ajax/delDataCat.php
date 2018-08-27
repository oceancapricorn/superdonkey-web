<?php
	require_once '../../../models/DBConnectModel.php';
	require_once '../../../models/BarCategoriesModel.php'; 
	$id = $_POST["id"];

	$obkat = new BarCategoriesModel();
	$kat = $obkat -> delBarCategories($id);


?>