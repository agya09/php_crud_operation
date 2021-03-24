<?php
session_start();

$db= mysqli_connect('localhost','root','','firsttask');

if (isset($_POST['login'])) {
	$username= $_POST['username'];
	$password= $_POST['password'];

	$sql = "SELECT * FROM admintable WHERE username='$username' AND password='$password'";
	$result= mysqli_query($db,$sql);
	if (mysqli_num_rows($result)==1) {
	$_SESSION['message']="sucessfully logged in";
	$_SESSION['username']=$username;	
	header('location:home.php');
	}
	else{
	header('location:login.php');
}
}
?>