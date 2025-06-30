<!DOCTYPE html>
<html>
<head>
	
	<title>This is for ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Ajax crud operation</h1>
		<input id="name" class="input" type="text" placeholder="Name" >
		<input id="email" class="input" type="email"  placeholder="Email" >
		<input id="password" class="input" type="text" placeholder="password"><br><br>
		<button  class="btn">Insert data</button><br><br>
		<button  class="read">read</button>

       <h1>Reading data from database</h1>
	   <table>
	   	 <thead>
	   	 	<th>Name</th>
	   	 	<th>Email</th>
	   	 	<th>Password</th>
	   	 	<th>Delete</th>
	   	 	<th>Edite</th>
	   	 	<tbody id="tbody">
	   	 		
	   	 	</tbody>
	   	 </thead>
	   </table>

	</div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script src="ajax.js" type="text/javascript"> </script>
</body>
</html>  