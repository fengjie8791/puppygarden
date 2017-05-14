
<?php 
	include "db_connect.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query_1 = "SELECT * FROM users";
	$namelist =  $mysqli->query($query_1);


	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Sign in</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autohome.js"></script>
	

</head>
<body>
<div class="container">
	

	<?php

	$currentuser = "";
	while($row = $namelist->fetch_object()){
	$userlist = explode(" ", $row->username);
	$passlist = explode(" ", $row->password);
	$id_num = explode(" ", $row->id);

	if($username == $userlist[0]){
		$currentuser = $userlist[0];
		$currentpass = $passlist[0];
		$currentid = $id_num[0];
	};
}	
if($currentuser == ""){


	?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">Username is not exist</p>
		<a class="login-sign-sorry" href="signin.php">Back</a>
<?php
}else if($password == ""){
?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">Please type in your password</p>
		<a class="login-sign-sorry" href="signin.php">Back</a>
<?php

}else if($password == $currentpass){


	?>
		<h1 class="login-title">Welcome!</h1>
		<p class="login-name-sorry"><?php echo $currentuser;?></p>

		<?php include("partials/autohome.html");?>

		<a class="login-sign-sorry" href="index.php">Home</a>

	<?php
	$query_4 = "UPDATE currentusername SET id_num = '$currentid' ,currentusername = '$currentuser' WHERE id = '1'";
	$mysqli->query($query_4);
?>


<?php

}else{

?>
		<h1 class="login-title">Sorry</h1>
		<p class="login-name-sorry">Password is not currect!!</p>
		<a class="login-sign-sorry" href="signin.php">Back</a>
<?php
	
}



	// $query = "INSERT INTO users (id ,username, password) VALUES ('2' ,'$username', '$password')";

	// $result = $mysqli->query($query);
	

	// echo $username;
	// echo $password;


	?>
</div>

</body>
</html>