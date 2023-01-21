<?php
	$conn = new mysqli("localhost", "root", "mysql", "db_task");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>