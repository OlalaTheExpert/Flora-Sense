<?php include ('sess.php');?>
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
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

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
                                    </a><a href="booking.php" class="btn-box big span4"><i class="icon-user"></i><b>
                                    <span>
                                    <?php
                                    include ('../config.php');
                                        $sql = "SELECT * FROM bookings";
                                       if ($stmt = $conn->prepare($sql)) {
                                         $stmt->execute();
                                          $stmt->store_result();
                                           printf( $stmt->num_rows);
                                       }
                                    ?>
                                    </span>
                                    </b>
                                        <p class="text-muted">
                                            Bookings</p>
                                    </a><a href="" class="btn-box big span4"><i class="icon-home"></i><b>
                                    
                                    <span>
                                   1(Thika)
                                    </span>

                                    </b>
                                        <p class="text-muted">
                                            Locations</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                     
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Bookings</h3>
                                </div>
                                <div class="module-body table table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Service
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Time
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>Status</th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <?php 
										require '../config.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM bookings ORDER BY booking_id");
										while($row = $query->fetch_array()){
										$house_id_id=$row['booking_id'];
										?>
                                            <td><?php echo $row ['name'];?></td>
                                            <td><?php echo $row ['email'];?> 
                                                <a href="mailto:<?php echo $row ['email'];?>"> <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </td>
                                            <td><?php echo $row ['phone'];?>  
                                                <a href="tel:<?php echo $row ['phone'];?>"> <i class="far fa-comment-alt"></i></a>
                                            </td>
                                            <td><?php echo $row ['service'];?></td>
                                            <td><?php echo $row ['date'];?></td>
                                            <td><?php echo $row ['time'];?></td>
                                            <td><?php echo $row ['description'];?></td>
                                            <td><?php echo $row ['amount_paid'];?></td>
                                            <td width="45%">
                                                
                                            <a title="Delete" href="delete_booking.php?delete=<?php echo $row['booking_id']?>"  class="btn btn-danger btn-outline"><i class="fa fa-trash-alt"></i> </a>	
										
											 <a  title="Confirm" href="edit_booking.php?edit=<?php echo $row['booking_id']?>"  class="btn btn-success btn-outline"> Confirm</a>	
                                              </td>
                                            	
                                            <!-- <td>
<a  title="Confirm" href="edit_booking.php?edit=<?php echo $row['booking_id']?>"  class="btn btn-success btn-outline"> Confirm</a>
                                            </td> -->
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Service
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Time
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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