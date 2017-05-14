
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Log In</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
</head>
<body>
<h1 class="login-title">Log In</h1>
<div class="container">
<div class="login-box">
<form action="signin_1.php" method="post">
		<p class="login-name">Username</p>
		<input class="login-input" type="text" name="username" placeholder="Username">
		<p class="login-name">Password</p>
		<input class="login-input" type="password" name="password" placeholder="Password"><br>
		<!-- <input type="submit"> -->
		<button class="login-button" type="submit">Log In</button>
	</form>
	<a class="login-sign" href="newuser.php">Create New User</a>
	<a class="login-sign" href="index.php">Back to home</a>
</div>
</div>	


</body>
</html>
