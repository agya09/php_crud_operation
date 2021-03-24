<?php
include('config.php');

$studentname= $_POST['studentname'];
$college= $_POST['college'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$phonenumber=$_POST['phonenumber'];

$sql= "INSERT into studenttable (studentname, college, gender, address, phonenumber) VALUES ('$studentname','$college','$gender','$address','$phonenumber')";

if (mysqli_query($conn,$sql)) {
	echo "Data recorded.";
}
else{
	echo "Error in recording.";
}

mysqli_close($conn);

?>
<center>
<a href="home.php" style="color: red;font-size: 17px;">Back to home</a></center>