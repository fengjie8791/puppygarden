<?php 
	include "db_connect.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	$query_1 = "SELECT * FROM users";
	$namelist =  $mysqli->query($query_1);

	$query_4 = "SELECT * FROM users ";
	$namelist_4 = $mysqli->query($query_4);

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>New Account</title>
		<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autohome.js"></script>
	</head>
	<body>
		<div class="container">

		
	
<?php
	$boll = false;
	while($row = $namelist->fetch_object()){
	$array = explode(" ", $row->username);
	$id_num = explode(" ", $row->id);

	// print_r($id_num[0]);
	// print_r($array[0]);
	if($username == $array[0]){
		$boll = true;

	};
}	
if($username == "" || $password == "" || $repassword == ""){
		?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">Please type in Username or password</p>
		<a class="login-sign-sorry" href="newuser.php">Back</a>

<?php
}else if($password != $repassword){
		?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">Please type in the same password</p>
		<a class="login-sign-sorry" href="newuser.php">Back</a>
<?php
}else{

if($boll == true){
		?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">The username has been used</p>
		<a class="login-sign-sorry" href="newuser.php">Back</a>

<?php
}
if($boll == false){
	$query = "INSERT INTO users (id ,username, password) VALUES ('NULL' ,'$username', '$password')";
	$result = $mysqli->query($query);




	$query_1 = "SELECT * FROM users";
	$namelist =  $mysqli->query($query_1);


	while($row = $namelist->fetch_object()){
	$array = explode(" ", $row->username);
	$id_num = explode(" ", $row->id);

	

	if($username == $array[0]){

	$currentid = $id_num[0];
		
	};

};


	$query_7 = "UPDATE currentusername SET id_num = '$currentid' ,currentusername = '$username' WHERE id = '1'";
	$result_7 = $mysqli->query($query_7);

		?>
		<h1 class="login-title">Welcome to join us!!</h1>
		<p class="login-name-sorry"><?php echo $username;?></p>
		<?php include("partials/autohome.html");?>
		<a class="login-sign-sorry" href="index.php">Home</a>


<?php




}

}
	




	// $query = "INSERT INTO users (id ,username, password) VALUES ('2' ,'$username', '$password')";

	// $result = $mysqli->query($query);
	

	// echo $username;
	// echo $password;


	?>
	</div>

	</body>
	</html>