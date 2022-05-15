<?php
include 'connect.php';
session_start();
//$ses_userid =$_SESSION[staffID];
//$ses_username = $_SESSION[staffPassword];
if(isset($_POST['logIn'])){
$member = $_POST['memberID'];
$password = $_POST['memberPassword'];

$loginCheck = "SELECT * FROM member WHERE MemberID = '$member' AND Password = '$password' ";
$loginCheckQuery = mysqli_query($connect,$loginCheck);
if(mysqli_num_rows($loginCheckQuery)==1){
	$s = mysqli_fetch_assoc($loginCheckQuery);
	$_SESSION['memberID'] = $staff;
	header('Location: ../Home/homeWback.php');
	
}else{
	header('Location: memberLogin.php');
}
}else if(isset($_POST['logOut'])){
	unset ( $_SESSION[‘memberID’] );
	session_destroy();
	header('Location: ../Home/homeWback.php');

}


?>