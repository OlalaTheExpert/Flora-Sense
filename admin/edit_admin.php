<?php include ('sess.php');?>
<?php
require_once '../config.php';
$id = isset($_GET['edit']) ? $_GET['edit'] : '0';
$sql= "SELECT * FROM user WHERE user_id=$id";
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//print_r ($row); 
?>

<?php
require_once '../config.php';
                                        if (isset($_POST['ok'])){
                                        
                                       $username=$_POST['username'];
                                        $password=$_POST['password'];
                                        $firstname=$_POST['firstname'];
                                        $lastname=$_POST['lastname'];
                                        $email=$_POST['email'];
                                        $phonenumber=$_POST['phonenumber'];
                                        $user_id=$_POST['user_id'];
                                        
                                             $conn->query("UPDATE user SET username='$username', password ='$password',firstname ='$firstname', lastname ='$lastname', email='$email' WHERE user_id = '$user_id'");//or die ("Unable to register");
                                            header('location:dashboard.php');
                                    ?>
                                   
                                            <script>
                                           alert("You have been Registered Successfully");
                                            </script>
                      <?php 
                      
                                            
                        
                      }
                                    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php include('title.php');?> ADMIN</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#"><?php include('title.php');?></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                           
                        </ul>
                
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a href="#">Welcome:<b>
                        <!--display name-->
                        
<?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?>
</b>                         
</a>                   <!-- -->
</li>
                                    <li><a href="#">Your Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                                <li><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="dashboard.php"><i class="menu-icon icon-user"></i>Admin </a>
                                </li>
                                <li><a href="add_admin.php"><i class="menu-icon icon-user"></i>Add Admin</a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i>Number of Admins <b class="label orange pull-right">
                                    1</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <!-- li><a href="client.php"><i class="menu-icon icon-user"></i> Client </a></li>
                                <li><a href="add_client.php"><i class="menu-icon icon-user"></i>  Add Client</a></li -->
                                <li  class="active"><a href="booking.php"><i class="menu-icon icon-home"></i> booking</a></li>
                                <li><a href="add_booking.php"><i class="menu-icon icon-home"></i>Add A Booking </a></li>
                                <!--li><a href="#"><i class="menu-icon icon-home"></i> Number of Houses <b class="label orange pull-right" --->
                                    
                                <span>
                                    <?php
                                    /*
                                    include ('../config.php');
                                        $sql = "SELECT * FROM houses";
                                       if ($stmt = $conn->prepare($sql)) {
                                         $stmt->execute();
                                          $stmt->store_result();
                                           printf( $stmt->num_rows);
                                       }
                                       */
                                    ?>
                                    </span>


                                    </b></a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Other Login </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="../"><i class="icon-inbox"></i>Login As Client </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-user"></i><b>
                                    <span>
                                    <?php
                                    include ('../config.php');
                                        $sql = "SELECT * FROM user";
                                       if ($stmt = $conn->prepare($sql)) {
                                         $stmt->execute();
                                          $stmt->store_result();
                                           printf( $stmt->num_rows);
                                       }
                                    ?>
                                    </span>
                                    </b>
                                        <p class="text-muted">
                                            Admin</p>
                                    </a><a href="client.php" class="btn-box big span4"><i class="icon-user"></i><b>
                                    <span>
                                    <?php
                                    include ('../config.php');
                                        $sql = "SELECT * FROM customers";
                                       if ($stmt = $conn->prepare($sql)) {
                                         $stmt->execute();
                                          $stmt->store_result();
                                           printf( $stmt->num_rows);
                                       }
                                    ?>
                                    </span>
                                    </b>
                                        <p class="text-muted">
                                            Clients</p>
                                    </a><a href="house.php" class="btn-box big span4"><i class="icon-home"></i><b>
                                    
                                    <span>
                                    <?php
                                    include ('../config.php');
                                        $sql = "SELECT * FROM houses";
                                       if ($stmt = $conn->prepare($sql)) {
                                         $stmt->execute();
                                          $stmt->store_result();
                                           printf( $stmt->num_rows);
                                       }
                                    ?>
                                    </span>

                                    </b>
                                        <p class="text-muted">
                                            Houses</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                     
<!------------------form------------------------->

<br />

									<form class="form-horizontal row-fluid" action="edit_admin.php" method="POST">
										

										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" name="username" value="<?php echo $row['username']; ?>" placeholder="" class="span8" >
                                                <input type="hidden" id="basicinput" name="user_id" value="<?php echo $row['user_id']; ?>" placeholder="Username" class="span8"/>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" name="password" id="basicinput" value="<?php echo $row['password']; ?>" placeholder="password" class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Firstname</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="firstname" value="<?php echo $row['firstname']; ?>" type="text" placeholder="Firstname" data-original-title="" class="span8 tip">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">last name</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="lastname" type="text" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input data-title="Email" name="email" type="text" value="<?php echo $row['email']; ?>" placeholder="Email" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit"  name="ok" class="btn">Update Admin</button>   
											</div>
										</div>
									</form>


<!--------/---------form------------------------->


                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 <?php include('title.php');?> </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>