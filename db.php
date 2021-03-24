<?php
include('config.php');

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql= "INSERT into admintable (username, email, password) VALUES ('$username','$email','$password')";

if (mysqli_query($conn,$sql)) {
	echo "Data recorded.";
}
else{
	echo "Error in recording.";
}

mysqli_close($conn);

?>
<p>
  		Want to log in? <a href="login.php">Log in</a>
  	</p>