<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `stu` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<div align="center">
	<u><h2>Edit Page</h2></u>
	<form method="POST" action="insert.php?id=<?php echo $id; ?>">
		<table>
		<tr><td>Name:</td><td><input type="text" value="<?php echo $row['name']; ?>" name="name"></td></tr>
		<tr><td>DOB:</td><td><input type="text" value="<?php echo $row['dob']; ?>" name="dob"></td></tr>
	    <tr><td>Gender:</td><td><input type="text" value="<?php echo $row['gender']; ?>" name="gender"></td></tr>
		<tr><td>Address:</td><td><input type="text" value="<?php echo $row['address']; ?>" name="address"></td></tr>
		<tr><td>Country:</td><td><input type="text" value="<?php echo $row['country']; ?>" name="country"></td></tr>
		<tr><td>State:</td><td><input type="text" value="<?php echo $row['state']; ?>" name="state"></td></tr>
		<tr><td>city:</td><td><input type="text" value="<?php echo $row['city']; ?>" name="city"></td></tr>
		<tr><td>pincode:</td><td><input type="text" value="<?php echo $row['pincode']; ?>" name="pincode"></td></tr>
		<tr><td>sphone:</td><td><input type="text" value="<?php echo $row['sphone']; ?>" name="sphone"></td></tr>
		<tr><td>pphone:</td><td><input type="text" value="<?php echo $row['pphone']; ?>" name="pphone"></td></tr>
		<tr><td>Courses:</td><td><input type="text" value="<?php echo $row['coursrs']; ?>" name="courses"></td></tr>
		<tr><td>Email:</td><td><input type="text" value="<?php echo $row['email']; ?>" name="email"></td></tr>
		<tr><td>password:</td><td><input type="password" value="<?php echo $row['password']; ?>" name="password"></td></tr>



		<tr><td><a href="insert.php">Back</a></td><td><input type="submit" name="submit"></td></tr>
		</table>
				
	</form>
</div>
</body>
</html>