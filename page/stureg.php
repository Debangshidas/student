<html>

<head>

    
    <title>STUDENT REGISTRATION</title>

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
                            <center><h3>Fill out the form for registration</h3></center>
                        </div>
                        <div class="panel-body">
                            
							<form role="form" method="POST" action="insert.php">  
							      
										
										<div class="form-group">
										<label>Name</label>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Enter your first Name" name="name">
                                        </div>
										</div>
										
  
										<div class="form-group">
                                            <label>Date of Birth</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your DOB" name="dob">
                                        </div>
										</div>
										
                                        <div class="form-group">
                                            <label>Gender</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <select class="form-control" name="gender">
                                                <option>--Select--</option>
												<option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                           </select>
                                        </div>
										</div>
										
                                        <div class="form-group">
                                            <label>Address</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-star"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter Address" name="address">
                                        </div>
										</div>
										
                                        <div class="form-group">
                                            <label>Country</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your country"name="country">
                                        </div>
										</div>
										
										<div class="form-group">
                                            <label>State</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your state" name="state">
                                        </div>
										</div>
										
										
										<div class="form-group">
                                            <label>City</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your city" name="city">
                                        </div>
										</div>
										
										<div class="form-group">
                                            <label>Pincode</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your pincode" name="pincode">
                                        </div>
										</div>
										
								
										<div class="form-group">
                                            <label>Student's phone number</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your student's phone" name="sphone">
                                        </div>
										</div>
										
										
										<div class="form-group">
                                            <label>Parent's phone number</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your parent's phone" name="pphone">
                                        </div>
										</div>
										
										<div class="form-group">
                                            <label>courses</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-star"></i>
                                            </span>
											<select class="form-control" name="courses">
                                                <option>--Select--</option>
												<option value="class 8">class 8</option>
                                                <option value="class 9">class 9</option>
                                                <option value="class 10">class 10</option>
                                                <option value="class 11">class 11</option>
                                                <option value="class 12">class 12</option>
                                            </select>
                                            </div>
											<div class="form-group">
                                            <label>Email</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <input class="form-control" placeholder="Enter your email" name="email">
                                        </div>
										
										<div class="form-group">
                                            <label>Password</label>
											<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control"  placeholder="Enter your password" >
                                        </div>
										</div>
										
										</div>
										
										</div>
										
									
                                        <button type="submit" class="btn btn-warning" name="add">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
										<button type="button" class="btn btn-Default"><a href="loginpage.php">Login</a></button>
										<button type="button" class="btn btn-success"><a href="../index.php">Home</a></button>
                                    </form>
</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>

<div class="col-lg-3"></div>
				
				
				<!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>
</html>