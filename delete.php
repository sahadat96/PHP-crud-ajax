<?php
   $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ajax';

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection error" . $conn->connect_error);
	}

	$userId = $_POST['userId'];
	$delete = "DELETE FROM ajaxtable WHERE id = $userId";
	$query = $conn->query($delete);
      
      if($query){
      	echo"Delete success";
      }else{
      	echo"delete not success";
      }
?> 