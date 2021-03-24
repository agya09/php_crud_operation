<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
</head>
<style>
	body{
		background-color: lightgrey;
		color: midnightblue;
		font-size: 25px;
	}
</style>
<body>
	<center>
<h1>This is my first task.</h1>
<form method="post" action="db.php">
<div class="input">
<label>Enter your name</label>
<input type="text" name="username"required><br>
</div>
<div class="input">
<label>Enter your email</label>
<input type="email" name="email"required><br>
</div>
<div class="input">
<label>Create password</label>
<input type="password" name="password"required><br>
</div>
<div class="input">
 <button type="submit" class="btn" name="register">Register</button>
 </div>
<p>
Already signed up? <a href="login.php">Log In</a> </p>
</center>
</form>
</body>
</html>