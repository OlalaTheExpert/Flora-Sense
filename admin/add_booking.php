<?php

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
                     

<!--  insert booking----->
<?php
require_once '../config.php';
                                        if (isset($_POST['ok'])){

                                        $email = $_POST['email'];
                                        $name=$_POST['name'];
                                        $service=$_POST['service'];
                                        $phone=$_POST['phone'];
                                        $time=$_POST['time'];
                                        $date=$_POST['date'];
                                        $description=$_POST['description'];


                                        $query = "INSERT INTO bookings(name,email,phone,service,date,time,description) VALUES('$name','$email','$phone','$service','$date','$time','$description')";
                                        $run = mysqli_query($conn,$query);
                                        
                                        if($run){
                                            echo "<script> window.location='booking.php' </script>";
                                           
                                        }
                                        else{
                                            echo "error".mysqli_error($conn);
                                        }
                        
                      }
                                    ?>
 <!--  //insert booking----->


<!------------------form------------------------->

<br />

									<form class="form-horizontal row-fluid" enctype="multipart/form-data" action="add_booking.php" method="POST">
										

										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" name="name" id="basicinput" placeholder="name" class="span8" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Service</label>
											<div class="controls">
                                                <select tabindex="1" name="service" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Pedicure">Pedicure</option>
                                                    <option value="Moneycure">Moneycure</option>
                                                    <option value="Foot Massage">Foot Massage</option>
                                                    <option value="Full body massage">Full body massage</option>
                                                    <option value="Hair styling">Hair styling(specify)</option>
                                                    <option value="Facials">Facials</option>
                                                    <option value="Lite">Lite package</option>
                                                    <option value="Standard">Standard package</option>
                                                    <option value="Premium">Premium package</option>
												</select>

											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="email" type="email" placeholder="email" data-original-title="" class="span8 tip">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">phone number</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="phone" type="number" placeholder="phonenumber" data-original-title="" class="span8 tip">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Time</label>
											<div class="controls">
                                                <select tabindex="1" name="time" data-placeholder="Select here.." class="span8">
                                                    <option>Choose the time</option>
                                                    <option value="0900 - 1100">0900 - 1100</option>
                                                    <option value="1100 - 1300">1100 - 1300</option>
                                                    <option value="1400 - 1600">1400 - 1600</option>
                                                    <option value="1600 - 1800">1600 - 1800</option>
                                                    <option value="1800 - 2000">1800 - 2000</option>
                                                    <option value="2000 - 2200">2000 - 2200</option>
												</select>

											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Date</label>
											<div class="controls">
                                            <input type="date" name="date"  class="span8"><span class="add-on"></span>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
                                            <textarea class="form-control" name="description" rows="2" placeholder="Description" required></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit"  name="ok" class="btn">Add Booking</button>
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