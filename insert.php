<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ajax';

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection error" . $conn->connect_error);
	}
  
  if(isset($_POST['name'])){
       $name  = $_POST['name'];
       $email = $_POST['email'];
       $pass  = $_POST['pass'];

     $insert = "INSERT INTO ajaxtable (name, email, pass)
     VALUES('$name', '$email', '$pass')" ;


 
     if($conn->query($insert) === TRUE){
      	echo"data insert success ";
      } else{
      	echo"data insert not success";
      }
  }
?>


