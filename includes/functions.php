<?php // global functions: for all

function redirect_to($new_location) {
		header("Location: ".$new_location);
		exit;
	}

function mysql_prep($string){
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
// Test if there was a query error
	function confirm_query($result_set) {
		if (!$result_set){
		die("Database query failed. Function confirm_query failed or its using in others func-s failed.");}
	}

function find_text_by_id($page_id){
		global $connection;
		
		$safe_page_id = mysqli_real_escape_string($connection, $page_id);
		
		$query  = "SELECT * ";
		$query .= " FROM test ";
		$query .= " WHERE id = {$safe_page_id} ";		
		$query .= " LIMIT 1";
		$text_set = mysqli_query($connection, $query);
		// Test if there was a query error
		confirm_query($text_set);
		
		if ($text_row = mysqli_fetch_assoc($text_set)) {
			return $text_row;
		} else {
			return null;
		}
	}



