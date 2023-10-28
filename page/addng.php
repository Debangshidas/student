<?php
     include('conn.php');
	 
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $msg=$_POST['msg'];
	 
	 mysqli_query($conn,"INSERT INTO `contact`(`name`,`email`,`phone`,`msg`) VALUES ('$name','$email','$phone','$msg')");
	 header('location:contact.php');
?>