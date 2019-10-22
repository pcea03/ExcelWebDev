<?php
	$conn = new mysqli('localhost', 'root', '', 'ajax');
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>