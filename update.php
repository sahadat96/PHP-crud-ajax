<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ajax';

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection error" . $conn->connect_error);
	}

	$name  = $_GET['user_name'];
	$email = $_GET['email'];
	$pass  = $_GET['pass'];
	$id    = $_GET['userId'];

	$sql = "UPDATE ajaxtable SET name ='$name', email ='$email', pass ='$pass'
	  WHERE id=$id";

	 $query = $conn->query($sql);
	 if($query){
	 	echo"Update success";
	 }else{
	 	echo"update failed";
	 }
?>