<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ajax';

	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection error" . $conn->connect_error);
	}

	 $select ="SELECT * FROM ajaxtable";
	 $query = $conn->query($select);
	 while($row = mysqli_fetch_array($query)){ ?>
         <tr>
         	<td><?php echo $row['name']; ?></td>
         	<td><?php echo $row['email']; ?></td>
         	<td><?php echo $row['pass']; ?></td>
         	<td><button onclick="Delete( <?php echo $row['id'] ?>)">DELETE</button></td>
         	<td><button onclick="edit( <?php echo $row['id'] ?>)">edit</button></td>
         	
         </tr>  
<?php }
?>