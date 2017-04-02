<?php 
	require_once 'includes/connect.php';
	if (isset($_POST['submit'])) {
		$task =$_POST['task'];
		if(isset($task)){
			$query = "INSERT INTO items VALUES (null, :item,1,1,:created)";
			$timestamp = date('Y-m-d H:i:s');
			$stmt=$conn->prepare($query);

			$stmt->bindParam("item",$_POST['task']);
			$stmt->bindParam("created",$timestamp);
			$stmt->execute(); 
		}
	}
	header('location:index.php');
 ?>