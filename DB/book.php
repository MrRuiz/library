<?php

	require_once('crud.php');

	class Book extends Crud
	{
		protected $table = "books";

		private $name;
		private $link;
		private $content;

		public function get_name() 			{ return $this->name;  }
		public function set_name($name) 	{ $this->name = $name; }

		public function get_link() 			{ return $this->link;  }
		public function set_link($link) 	{ $this->link = $link; }

		public function get_content() 			{ return $this->content;   	 }
		public function set_content($content) 	{ $this->content = $content; }


		public function get_by_category($category_id) {
			$sql = "SELECT DISTINCT  ". $this->table .".* FROM ". $this->table ." JOIN `book_categories` ON `books`.`id` = `book_categories`.`book_id` JOIN `categories` ON `book_categories`.`category_id` = `categories`.`id` WHERE `categories`.`id` = " . $category_id;
			return DB::query($sql);
		}

		public function get_by_name($name) {
			$sql = "SELECT * FROM ". $this->table ." WHERE name = " . $name;
			return DB::query($sql);
		}

		public function update($id) {
			return "LATER";
		}


	}

?>