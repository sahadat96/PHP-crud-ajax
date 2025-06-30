<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ajax';

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection error" . $conn->connect_error);
	}

	$id = $_GET['userId'];
	$sql = "SELECT * FROM ajaxtable WHERE id = $id";
	$query = $conn->query($sql);
	$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
     <div class="container">
		<h1>Edit Page</h1>
		<input id="name" class="input" type="text" value="<?php echo $row['name']; ?>" placeholder="Name" >
		<input id="email" class="input" type="email" value="<?php echo $row['email']; ?>" placeholder="Email" >
		<input id="password" class="input" type="text" value="<?php echo $row['pass']; ?>" placeholder="password"><br><br>
		<button class="edit" onclick="update_( <?php echo $row['id']; ?>)">Edit data</button>
		<button class="edit" onclick="home()">Home</button>
	 </div>
</body>
</html>