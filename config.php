<?php
$host= "localhost";
$username="root";
$password= "";
$name="firsttask";

$conn= mysqli_connect($host,$username,$password,$name);

if ($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}
echo "Connected to database!";

?>