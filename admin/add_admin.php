
<?php
require_once '../config.php';
                                        if (isset($_POST['ok'])){
                                        
                                        $username=$_POST['username'];
                                        $password=$_POST['password'];
                                        $firstname=$_POST['firstname'];
                                        $lastname=$_POST['lastname'];
                                        $email=$_POST['email'];
                                        $phonenumber=$_POST['phonenumber'];
                                        
                
                                        $query = $conn->query("SELECT * FROM user WHERE email='$email'"); //or die ("error contact Oporo(Brad)");
                                        $count1 = $query->num_rows;
        
                                        if ($count1  > 0){ 
                                    ?>
                                    <div class="alert alert-warning"><font color= 'red' size='3'>&nbsp;&nbsp;<i class="glyphicon glyphicon-warning-sign"></i>email already exist</font></div>
                                         
                                    <?php
                                        }
                                        else{
                                            $conn->query("INSERT INTO user(password,firstname,lastname,email,username) VALUES('$password','$firstname','$lastname','$email','$username')");//or die ("Unable to register");
                                            header('location:dashboard.php');
                                    ?>
                                   
                                            <script>
                                           alert("You have been Registered Successfully");
                                            </script>
                      <?php 
                      
                                            
                        } 
                      }

include_once 'include/sidebar.php';
?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <?php
                                if($user_role=='Admin'){
                                        
                                    
                                    ?>

                               
                                    <?php
                                    }
                                    include ('../config.php');
                                    //     $sql = "SELECT * FROM bookings";
                                    //    if ($stmt = $conn->prepare($sql)) {
                                    //      $stmt->execute();
                                    //       $stmt->store_result();
                                    //        printf( $stmt->num_rows);
                                    //    }

                                       foreach($conn->query('SELECT COUNT(*) FROM bookings') as $admincount) {
                   
                                       }
                                     foreach($conn->query("SELECT COUNT(*) FROM user WHERE user_role = 'Admin' ") as $admins) {
                                          
                                      }
                                       foreach($conn->query("SELECT COUNT(*)  FROM bookings WHERE email = '$email' ") AS $clientcount ) {
                                          
                                       }
                                   ?>

                                    <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-user"></i><b>
                                    <span>
                                    <?php echo $admins['COUNT(*)']; ?>
                                    </span>
                                    </b>
                                        <p class="text-muted">
                                            Admin</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>
                                   <?php
                               
                               if($user_role=='Admin'){
                               ?>
                                    <span>

                                    <?php  echo $admincount['COUNT(*)']; ?>
                                    </span>
                                    </b>
                                        <p class="text-muted">
                                            Bookings</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-home"></i><b>
                                    <?php
                                }else{
                                    ?>
                                    <span>

                                <?php  echo $clientcount['COUNT(*)']; ?>
                                </span>
                                </b>
                                    <p class="text-muted">
                                        Bookings</p>
                                </a><a href="" class="btn-box big span4"><i class="icon-home"></i><b>
                                 <?php
                                }

                               ?>
                                    <span>
                                   1(Thika)
                                    </span>

                                    </b>
                                        <p class="text-muted">
                                            Locations</p>
                                    </a>
                                </div>
                            </div>
                     
<!------------------form------------------------->

<br />

									<form class="form-horizontal row-fluid" action="add_admin.php" method="POST">
										

										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Username" class="span8" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" name="password" id="basicinput" placeholder="password" class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Firstname</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="firstname" type="text" placeholder="Firstname" data-original-title="" class="span8 tip">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">last name</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="lastname" type="text" placeholder="Lastname" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input data-title="Email" name="email" type="text" placeholder="Email" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit"  name="ok" class="btn">Add Admin</button>
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