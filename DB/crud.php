<?php

	require_once('DB.php');

	abstract class Crud extends DB
	{

		protected $table;

		abstract public function update($id);


		public function get_all() {
			$sql = "SELECT * FROM ". $this->table ." ORDER BY id DESC";
			return DB::query($sql);
		}

		public function get_by_id($id) {
			$sql = "SELECT * FROM ". $this->table ." WHERE id = " . $id;
			return DB::query($sql);
		}

		public function delete($id) {
			$sql = "DELETE FROM ". $this->table ." WHERE id = " . $id;
			return DB::query($sql);
		}

		public function truncate() {
			$sql = "TRUNCATE ". $this->table ."";
			return DB::query($sql);
		}
	}
?>