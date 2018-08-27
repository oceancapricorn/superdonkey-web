<?php
/**
 * Class BarItemsModel extends DBConnectModel
 * This class is used for queryng the database only (Behaving like a model)
 */
class BarItemsModel extends DBConnectModel {
	
		public function getAllSalateItems() {
		// Get all data and store it in array $data
		$sql = "SELECT item_title AS title, item_desc AS description,id, cat_id, price FROM bar_items WHERE cat_id = 1";
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


		public function getAllSokoviItems() {
		// Get all data and store it in array $data
		$sql = "SELECT item_title AS title, item_desc AS description,id, cat_id, price FROM bar_items WHERE cat_id = 2";
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

			public function getAllSmoothiesItems() {
		// Get all data and store it in array $data
		$sql = "SELECT item_title AS title, item_desc AS description,id, cat_id, price FROM bar_items WHERE cat_id = 3";
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


	public function getAllItems($id_cat="") {
		// Get all data and store it in array $data
		
		$idkat = "";
		if (strlen($id_cat)>0) {
			$idkat = " AND cat_id  =" .$id_cat;
		}

		$sql = "SELECT item_title AS title, item_desc AS description,id, cat_id, price FROM bar_items WHERE 1=1 ".$idkat;
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


	public function getItem($id="") {
		// Get all data and store it in array $data
		
		$idkat = "";
		if (strlen($id)>0) {
			$idkat = " AND id  =" .$id;
		}

		$sql = "SELECT item_title AS title, item_desc AS description,id, cat_id, price FROM bar_items WHERE 1=1 ".$idkat;
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

	public function saveBarItem($id,$title,$desc,$kat,$price) {
		// Get all data and store it in array $data
		if ($id==0){
			$sql = "INSERT INTO bar_items (item_title,price,item_desc,cat_id) VALUES ('".$title."',".$price.",'".$desc."',".$kat.")";
		} else {
		$sql = "UPDATE bar_items SET item_title='".$title."',price=".$price.", item_desc='".$desc."', cat_id=".$kat." WHERE id=" . $id;
		}
		$result = $this->connect()->query($sql);
		
	}



	public function delItem($id) {
		// Get all data and store it in array $data
		$sql = "DELETE FROM bar_items WHERE id=" . $id;
		$result = $this->connect()->query($sql);
		
	}

}