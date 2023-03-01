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
                            <!--/#btn-controls-->
                             <!----insert alert--->
                        <?php require_once 'delete_admin.php';?>
                        <?php if (isset($_SESSION['message'])){ ?>
                        <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show" role="alert">
                         <?php echo $_SESSION['message'];
                          unset($_SESSION['message']);
                          ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                         <?php } ?>
                        <!----/insert alert--->
    
                        <?php
                               
                               if($user_role=='Admin'){
                               ?>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Admins</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Firstname
                                                </th>
                                                <th>
                                                    Lastname
                                                </th>
                                                <th>
                                                    Password
                                                </th>
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
										$query = $conn->query("SELECT * FROM user ORDER BY user_id");
										while($row = $query->fetch_array()){
										$user_id=$row['user_id'];
										?>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['password'];?></td>
                                            <td style="text-align:center">
                                            <a title="Delete" href="delete_admin.php?delete=<?php echo $row['user_id']?>"  class="btn btn-danger btn-outline"><i class="fas fa-trash-alt"></i> Delete</a>	
										
											<a  title="Edit" href="edit_admin.php?edit=<?php echo $row['user_id']?>"  class="btn btn-success btn-outline"><i class="fas fa-pencil-alt"></i> Edit</a>	
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Firstname
                                                </th>
                                                <th>
                                                    Lastname
                                                </th>
                                                <th>
                                                    Password
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <?php
                               }
                               ?>
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