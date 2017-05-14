
<?php 
	include "db_connect.php";

	$name = $_POST['name'];
	$price = $_POST['price'];
	$product_list_des = $_POST['product_list_des'];
	$description = $_POST['description'];
	$des_list = $_POST['des_list'];
	$image = $_POST['image'];

	// print_r($name);
	// print_r($price);
	// print_r($product_list_des);
	// print_r($description);
	// print_r($des_list);
	// print_r($image);

	$query_upload = "INSERT INTO puppy_garden (id , date_create, date_modify, name, product_list_des, price, des_list, description, images) VALUES ('NULL' ,
																											    	NOW(), 
																											    	NOW(), 
																											    	'$name',
																											    	'$product_list_des',
																											    	'$price',
																											    	'$des_list',
																											    	'$description',
																											    	'$image')";
	$mysqli->query($query_upload);



	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Up Load</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autohome.js"></script>
	

</head>
<body>
		<h1 class="login-title">Thank You!</h1>
		<p class="login-name-sorry"> You have ADDED <span class="autocart"><?php echo $name;?> </span>in the website</p>

		<?php include("partials/autohome.html");?>

		<a class="login-sign-sorry" href="index.php">Home</a>

</body>
</html>