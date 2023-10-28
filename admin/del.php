<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `stu` where userid='$id'");
	header('location:insert.php');
?>