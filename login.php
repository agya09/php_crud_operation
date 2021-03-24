<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<style type="">
	body{
		background-color: violet;
		color: grey;
		font-size: 25px;
	}
</style>
<body>
	<center>
<h1>Welcome to login page!!!</h1>
<form method="post" action="fetch.php">
<div class="input">
<label>Username</label>
<input type="text" name="username" id="username" placeholder="Name" required><br>
</div>
<div class="input">
<label>Password</label>
<input type="password" name="password" id="password" placeholder="Password" required><br>
</div>
<div class="input">
<button type="submit" class="btn" name="login">Login</button>
</div>
Not yet signed up? <a href="signup.php"> Sign Up</a>
</center>
</form>
</body>
</html>