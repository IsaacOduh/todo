<?php
	require_once 'includes/connect.php';
	$id = $_GET['id'];
	if (isset($id)) {
		$query = "DELETE FROM items WHERE id = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindParam("id",$id);
		$stmt->execute(); 
	}
	header('location: index.php');
?>