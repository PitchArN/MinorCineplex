<?php
	session_start();
	if(isset($_SESSION['memberID'])){
		$memberID = $_SESSION['memberID'];
	}
	if(isset($_SESSION['staffID'])){
		$staffID =$_SESSION['memberID'];
		$staffRole = $_SESSION['role'];
	}
	$_SESSION['empty'] = 0;
	header('Location:BuyPop.php');
?>