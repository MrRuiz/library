<?php

	require_once('DB.php');

	abstract class Crud extends DB
	{

		protected $table;

		abstract public function update($values, $id);


		public function get_all() {
			$sql = "SELECT * FROM ". $this->table ." ORDER BY id ASC";
			return DB::query($sql);
		}

		public function get_by_id($id) {
			$sql = "SELECT * FROM ". $this->table ." WHERE `id` = " . $id;
			return DB::query($sql);
		}

		public function delete($id) {
			$sql = "DELETE FROM ". $this->table ." WHERE `id` = " . $id;
			return DB::query($sql);
		}
	}
?>