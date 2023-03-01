<?php
	require '../config.php';
	session_start(); 
	$user_username="";	
	$user_id="";

	if(!ISSET($_SESSION['user_id'])){
		//header("location:dashboard.php");
	}else{
		$session_id=$_SESSION['user_id'];
		$user_query = $conn->query("SELECT * FROM user WHERE user_id = '$session_id'") or die("unable to get your name");
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
		$user_role=$user_row['user_role'];
		$email=$user_row['email'];
	}
 

/*	if($user_username==""){
	//	header("location: index.php");
	}
	if($user_id==""){
	    header("location: index.php");
    }
	 */ 
?>
