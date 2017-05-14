
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>New Account</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
</head>
<body>
<h1 class="login-title">New Account</h1>
<div class="container">
<div class="login-box">
	<form action="newuser_1.php" method="post">
		<p class="login-name">New Username</p>
		<input class="login-input" type="text" name="username" placeholder="New Username">
		<p class="login-name">Password</p>
		<input class="login-input" type="password" name="password" placeholder="Password">
		<p class="login-name">Re-Password</p>
		<input class="login-input" type="password" name="repassword" placeholder="Re Password"><br>
		<button class="login-button" type="submit">Submit</button>
	</form>
		<a class="login-sign" href="signin.php">Log In</a>
		<a class="login-sign" href="index.php">Back to Home</a>


</body>
</html>
