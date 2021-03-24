<?php
include('config.php');
$id = $_GET['id'];

$sql= "DELETE FROM `studenttable`WHERE id=$id ";
$result = mysqli_query($conn,$sql);
if($result){
	header("location: home.php");
}


?>