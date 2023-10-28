<?php
	include('conn.php');
	
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$sphone=$_POST['sphone'];
	$pphone=$_POST['pphone'];
	$courses=$_POST['courses'];
	$email=$_POST['email'];
	$password=$_POST['password'];	
		
	mysqli_query($conn,	"INSERT INTO `stu`(`name`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `sphone`, `pphone`, `courses`, `email`, `password`) VALUES ('$name','$dob','$gender','$address','$country','$state','$city','$pincode','$sphone','$pphone','$courses','$email','$password')")
	//mysqli_query($conn,"insert into `stu` (firstname,lastname) values ('$firstname','$lastname')");
	//header("location: regSuccess.php");
	
?>