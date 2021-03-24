<?php
include('config.php');

$id= $_POST['id'];
$studentname = $_POST['studentname'];
$college =$_POST['college'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];


$sql= "UPDATE studenttable SET studentname= '$studentname', college= '$college', gender='$gender', address='$address', phonenumber='$phonenumber' WHERE id=$id";

$result = mysqli_query($conn,$sql);

if ($result) {
	header("location:home.php");
}

?>