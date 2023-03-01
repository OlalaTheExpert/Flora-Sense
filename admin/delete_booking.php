<?php
include ('../config.php');
require_once 'sess.php';
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM bookings WHERE booking_id=$id");
	$_SESSION['message'] = "booking deleted Successfully!";
	$_SESSION['msg_type'] = "danger";

    header("location:booking.php");
}
?>