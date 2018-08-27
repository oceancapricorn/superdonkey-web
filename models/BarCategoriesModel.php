<?php
/**
 * Class BarCategoriesModel extends DBConnectModel
 * This class is used for queryng the database only (Behaving like a model)
 */
class BarCategoriesModel extends DBConnectModel {
	
	public function getBarCategories() {
		// Get all data and store it in array $data
		$sql = "SELECT * FROM bar_categories";
		$result = $this->connect()->query($sql);
		if($result) {
			$numRows = $result->num_rows;
			if($numRows > 0) {
				while($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
			return $data;
			}
		}
	}

	public function getBarCategoriesOne($id) {
		// Get all data and store it in array $data
		$sql = "SELECT * FROM bar_categories WHERE id=" . $id;
		$result = $this->connect()->query($sql);
		if($result) {
			$numRows = $result->num_rows;
			if($numRows > 0) {
				while($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
			return $data;
			}
		}
	}

	public function saveBarCategories($id,$title,$desc) {
		// Get all data and store it in array $data
		if ($id==0){
			$sql = "INSERT INTO bar_categories (cat_title,cat_desc) VALUES ('".$title."','".$desc."')";
		} else {
			$sql = "UPDATE bar_categories SET cat_title='".$title."', cat_desc='".$desc."' WHERE id=" . $id;
		}
		$result = $this->connect()->query($sql);
		
	}


	public function delBarCategories($id) {
		// Get all data and store it in array $data
		$sql = "DELETE  FROM bar_categories WHERE id=" . $id;
		$result = $this->connect()->query($sql);
		
	}
}
