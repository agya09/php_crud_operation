<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['message']="You must login first";
	header('location:login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body style="background-color: pink; color: black; font-size: 25px;">

	 <p style="font-size:27px; color: black;">Update Student Details</p>
	 <?php
	 include('config.php');
	 $id = $_GET['id'];

	 $sql = "SELECT * FROM studenttable WHERE id = ".$id;

	 $result = mysqli_query($conn,$sql);

	 if ($result) {
	  	$row = mysqli_fetch_assoc($result);
	  	$studentname = $row['studentname'];
		$stdcollege = $row['college'];
		$stdgender = $row['gender'];
		$stdaddress = $row['address'];
		$stdphonenumber = $row['phonenumber'];


	  } 

	 ?>

	 <form method="post" action="editaction.php">

	 	<label>Student name</label><br>
	 	<input type="text" name="studentname" value="<?php global $studentname; echo $studentname ?>" required="" style="width: 30%;line-height: 2em;"><br>
	 	<label>College</label><br>
	 	<input type="text" name="college"value="<?php global $stdcollege; echo $stdcollege ?>" required="" style="width: 30%;line-height: 2em;"><br>
	 	<label>Gender</label><br>
	 	<input type="text" name="gender"value="<?php global $stdgender; echo $stdgender ?>" required="" style="width: 30%;line-height: 2em;"><br>
	 	<label>Address</label><br>
	 	<input type="text" name="address"value="<?php global $stdaddress; echo $stdaddress ?>" required="" style="width: 30%;line-height: 2em;"><br>
	 	<label>Phone number</label><br>
	 	<input type="number" name="phonenumber" value="<?php global $stdphonenumber; echo $stdphonenumber ?>"required=""style="width: 30%;line-height: 2em;"><br>

	 		<input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>" required="" style="width: 30%;line-height: 2em;"><br>

	 	<button type="submit" class="btn" name="update"style="width: 30%;line-height: 2em;">Update</button>

	 	
	 </form>

	
</body>
</html>