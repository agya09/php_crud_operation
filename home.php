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
<style>
	table th,tr{
		border:1px solid black; 

	}


</style>
<body style="background-color: pink; color: black; font-size: 25px;">
	<center>
	<h1 style="color:red;">This is home page.</h1>
	
<div >
    <?php  if (isset($_SESSION['username'])) : ?>
    <center> <p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p></center> 
     
    <?php endif ?>
</div>

	 <p> <a href="home.php?logout='1'" style="color: red; font-size:20px;">Logout</a> </p></center>

	 <p style="font-size:27px; color: black;">Student Details form</p>

	 <form method="post" action="db1.php">

	 	<label>Student name</label>
	 	<input type="text" name="studentname" required=""><br>
	 	<label>College</label>
	 	<input type="text" name="college" required=""><br>
	 	<label>Gender</label>
	 	<input type="text" name="gender" required=""><br>
	 	<label>Address</label>
	 	<input type="text" name="address" required=""><br>
	 	<label>Phone number</label>
	 	<input type="number" name="phonenumber" required=""><br>
	 	<button type="submit" class="btn" name="submit">Submit</button>

	 	
	 </form>

	<h2>Submitted Details</h2> 
	<table>
		<tr>
		<th>Name</th>
		<th>College</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Phone number</th>
		<th>Actions</th>
		</tr>
		<tr>
			<td>
				<?php
				
$host= "localhost";
$username="root";
$password= "";
$name="firsttask";

$conn= mysqli_connect($host,$username,$password,$name);

if ($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}


			$sql =" SELECT * FROM studenttable";
			$result= mysqli_query($conn,$sql);

			if ($result) {
				while ( $row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					$studentname = $row['studentname'];
					$college = $row['college'];
					$gender = $row['gender'];
					$address = $row['address'];
					$phonenumber = $row['phonenumber'];

					?>
					<tr style="border:1px solid black;">
						<td style="border:1px solid black; "><?php echo $studentname ?></td>
						<td style="border:1px solid black;"><?php echo $college ?></td>
						<td  style="border:1px solid black; "><?php echo $gender ?></td>
						<td style="border:1px solid black; "><?php echo $address ?></td>
						<td style="border:1px solid black; "><?php echo $phonenumber ?></td>
						<td style="border:1px solid black; ">
							<a href="edit.php?id=<?php echo $id?>">Update</a>
							<a href="delete.php?id=<?php echo $id?>">Delete</a>
						</td>

					</tr>



					<?php
				}
			}

			
		
			?>
			 </td>
		
		</tr>
	</table>
	

</body>
</html>