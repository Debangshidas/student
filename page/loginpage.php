

<html>

<head>

    
    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

<body>

<div class="col-lg-3"></div>
					 <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                       
                           <center><h3>Login page</h3></center>
                        </div>
                        <div class="panel-body">
                            <p>  <form method="POST">
										<div class="form-group">
                                            
										
										<div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" placeholder="Enter your Email" type="text" name="email">
                                        </div>
										<div class="form-group">
										<label>Password:</label>
										<input class="form-control" type="password"placeholder="Enter your password"name="password">
										</div>
										 <button type="submit" name="submit" id="sub" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
										<button type="button" class="btn btn-Default"><a href="stureg.php"> registration</a></button>
										<button type="button" class="btn btn-success"><a href="../index.php">Home</a></button>
                                    </form>

                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
				<div class="col-lg-3"></div>
					 
					 
<!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php
mysql_connect("localhost","root", ""); 
mysql_selectdb("student");
if (isset($_POST['submit'])) {
	$em=$_POST['email']; 
	$pw=$_POST['password'];
	$sql=mysql_query("select password from stu where email='$em'"); 
	if ($row=mysql_fetch_array($sql)) {
		if ($pw==$row['password']) { 
			header("location:welcome.html");
			exit();
		}
		else
			echo "Invalid email";
	}
	else
		echo "Invalid password";
}
?>