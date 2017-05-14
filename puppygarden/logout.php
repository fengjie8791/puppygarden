

<?php
	include "db_connect.php";


	
	$query_4 = "UPDATE currentusername SET currentusername = 'null' WHERE id = '1'";
	$mysqli->query($query_4);

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Log Out</title>
		<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autohome.js"></script>
	</head>
	<body>
	<div class="container">
		

	<h1 class="login-title">Thank you!</h1>
	<p class="login-name-sorry">You have been log out</p>
		<?php include("partials/autohome.html");?>

	<a class="login-sign-sorry" href="index.php">Home</a>	
	</body>
	</div>
	</html>