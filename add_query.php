<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
	require_once 'conn.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$conn->query("INSERT INTO `task` (`task`,`status`) VALUES ('$task', 'pending')");
			header('location:index.php');
		}
	}
?>