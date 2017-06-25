<?php

	require_once('book.php');

	$book = new Book();
	$result   = $book->get_by_category(4);

	while( $row = $result->fetch_assoc() ) {
		print_r($row);
	}
?>