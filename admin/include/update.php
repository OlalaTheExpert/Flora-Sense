<?php

$id=$_GET['id'];

require '../../config.php';

$sql = "SELECT * FROM bookings WHERE booking_id='$id' ";
         $res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0){

$query1 = "UPDATE bookings SET stat='1' WHERE booking_id='$id'  "; 
               
$update_query = mysqli_query($conn, $query1);

if($update_query)
{
	echo "<script>alert('Booking Approved Successfully');
    location.href = '../booking.php';
    </script>";
}
}

?>