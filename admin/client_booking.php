<?php
include_once 'include/sidebar.php';
?>
       <style>
        a{
            text-decoration:none !important;
            color:White;
        }
       </style> 
       <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <!-- <div class="btn-box-row row-fluid">
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
                                </div> -->
                            </div>
                            <!--/#btn-controls-->
                     
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Bookings </h3>
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
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <?php 
										require '../config.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM bookings WHERE email='$email' ORDER BY booking_id");
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
                                            <td>
                                                <?php 
                                                if($row['stat']=='1'){
                                                ?>
                                                <p class="badge badge-success"> Approved <br>
                                                <a href="print.php?pid=<?php echo $row ['booking_id']; ?>">Print invoice </a></p>
                                                <?php
                                                }elseif($row['stat']=='0'){
                                                ?>
                                                 <p class="badge badge-danger"> Cancelled </p>
                                                <?php
                                                }else{
                                                ?>
                                                <p class="badge badge-info"> Pending </p>
                                                 
                                                <?php
                                                }
                                                ?>

                                            </td>
                                           
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
                <b class="copyright">&copy; 2023 <?php include('title.php');?> </b>All rights reserved.
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