<?php
include 'connect.php';
session_start();
//$ses_userid =$_SESSION[staffID];
//$ses_username = $_SESSION[staffPassword];
if(isset($_POST['CheckIn'])){
$staff = $_POST['staffID'];
$password = $_POST['staffPassword'];

$loginCheck = "SELECT * FROM staff WHERE StaffID = '$staff' AND StaffPassword = '$password' ";
$loginCheckQuery = mysqli_query($connect,$loginCheck);
if(mysqli_num_rows($loginCheckQuery)==1){
	$s = mysqli_fetch_assoc($loginCheckQuery);
	$_SESSION['staffID'] = $staff;
	$_SESSION['role'] = $s['StaffType'];

	$dayToday = date("D",strtotime("now"));
	$findWorkDay = "SELECT * FROM staffwork WHERE WorkDay = '$dayToday'";
	$findWorkQuery = mysqli_query($connect,$findWorkDay);
	if(mysqli_num_rows($findWorkQuery)!= 0){
		$lateChecker = mysqli_fetch_assoc($findWorkQuery);
		$nowtime = date("H:i:s",strtotime("-10 minute"));
		$nowDate = date("Y-m-d",strtotime("-10 minute"));
		$ontime = 0;
		if($lateChecker['WorkStartTime']>=$nowtime){
			$ontime = 1;
		}

		$checkInStaff = "INSERT INTO staffcheck(StaffID,WorkDay,timecheck,checktype,ontime) VALUES ('$staff','$nowDate','$nowtime','IN','$ontime')";
		$checkInStaffQuery = mysqli_query($connect,$checkInStaff);
	}

	header('Location: LinkStaffMovie.php');
	
}else{
	header('Location: CheckStaff.php');
}
}else if(isset($_POST['logOut'])){
	unset ( $_SESSION[‘StaffID’] );
	unset ( $_SESSION[‘role’] );
	session_destroy();
	header('Location: LinkStaffMovie.php');

}


?>