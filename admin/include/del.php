<?php
include '../../include/config.php';
$id=$_GET['id'];

$query = $conn->query("SELECT * FROM bookings where id='$id' ");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
      $id = $row['id'];
     
     
    }
}


$del_query="DELETE FROM `services` WHERE id ='$id' ";

$del_query = mysqli_query($conn, $del_query);

if( $del_query){
    echo "<script>alert('Service Deleted Successfully');
    window.location='lincense.php';
    </script>";
 }
	



?>