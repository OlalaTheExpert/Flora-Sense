<?php
include('../config.php');
include('sess.php');
session_destroy();
unset($_SESSION['LAST_ACTIVE_TIME']);
unset($_SESSION['IS_LOGIN']);
unset($_SESSION);

header('location: index.php'); 
?>