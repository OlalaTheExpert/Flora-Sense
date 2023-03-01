<?php include ('sess.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                                    </a>               
                                    <!-- -->
                                    </li>
                                    <!--li><a href="request.php">Requests</a></li-->
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
                                
                            <?php
                               
                               if($user_role=='Admin'){
                               ?>
                                <li><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>

                                 <li><a href="dashboard.php"><i class="menu-icon icon-user"></i>Admin</a>
                                </li>   
                                <li><a href="clients.php"><i class="menu-icon icon-user"></i>Clients</a>
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
                                <!-- <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Other Login </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="../"><i class="icon-inbox"></i>Login As Client </a></li>
                                    </ul>
                                </li> -->
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                                <?php
                                }else{
                                ?>
                                 <li  class="active"><a href="client_booking.php"><i class="menu-icon icon-home"></i> Bookings</a></li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>