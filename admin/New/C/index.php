<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<div id="main">
<h1>LOGIN</h1>

<form method="POST">

Username <input type="text" name="uname" class="text" autocomplete="off" required>

Password <input type="password" name="upass" class="text" required>

<input type="Submit" name="submit" id="sub">
</form>
</div>
</body>
</html>


<?php
mysql_connect("localhost","root", ""); 
mysql_selectdb("student");
if (isset($_POST['submit'])) {
	$un=$_POST['uname']; 
	$pw=$_POST['upass'];
	$sql=mysql_query("select upass from admin where uname='$un'"); 
	if ($row=mysql_fetch_array($sql)) {
		if ($pw==$row['upass']) { 
			header("location:home.php");
			exit();
		}
		else
			echo "Invalid Password";
	}
	else
		echo "Invalid Username";
}
?>