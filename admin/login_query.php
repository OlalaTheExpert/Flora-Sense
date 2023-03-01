	<?php
	require_once '../config.php';
	
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM user WHERE username = 	'$username' && BINARY password = '$password'") or 
		die("Unable to LogIn Check Details or Contact Oporo(Brad) 0794383934/Contact us ");
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `user` WHERE username = 	'$username'  && BINARY password = '$password'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['user_id'] = $row['user_id'];
			header('location:dashboard.php');
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR! CHECK DETAILS</center></font>";
		}
	
	}
?>