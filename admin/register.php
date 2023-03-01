<?php
require_once '../config.php';
                                        if (isset($_POST['ok'])){
                                        
                                        $username=$_POST['username'];
                                        $password=$_POST['password'];
                                        $firstname=$_POST['fname'];
                                        $lastname=$_POST['lname'];
                                        $email=$_POST['email'];
                                        $phonenumber=$_POST['phone'];
                                        
                
                                        $query = $conn->query("SELECT * FROM user WHERE email='$email'"); //or die ("error contact Oporo(Brad)");
                                        $count1 = $query->num_rows;
        
                                        if ($count1  > 0){ 
                                    ?>
                                    <div class="alert alert-warning"><font color= 'red' size='3'>&nbsp;&nbsp;<i class="glyphicon glyphicon-warning-sign"></i>email already exist</font></div>
                                         
                                    <?php
                                        }
                                        else{
                                            $conn->query("INSERT INTO user(password,firstname,lastname,email,username, user_role) VALUES('$password','$firstname','$lastname','$email','$username', 'User')");//or die ("Unable to register");
                                            //header('location:dashboard.php');
                                    
                                   
                                           echo '<script>
                                           alert("You have been Registered Successfully");
                                           location.href = "index.php";
                                            </script>';
                     
                                            
                        } 
                      }
                 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php include('title.php');?></title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
				  <?php include('title.php');?>
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li></li>

						

						<li><a href="index.php">
							Login
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4" >
             	
					<form class="form-vertical" role="form" action="register.php" method="POST" enctype = "multipart/form-data">
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="username" id="inputEmail" placeholder="Username" required>
								</div>
							</div>
							
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="fname" id="inputPassword" placeholder="Firstname" required>
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="lname" id="inputPassword" placeholder="Last name" required>
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" name="email" id="inputPassword" placeholder="Email" required>
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="number" name="phone" id="inputPassword" placeholder="Phone Number" required>
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="password" id="inputPassword" placeholder="Password" required>
								</div>
							</div>
                          
						</div>
                        
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="ok">Register</button>								
								</div>
							</div>
						</div>
						<?php include ('login_query.php');?>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
   <?php include ('footer.php'); ?>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>