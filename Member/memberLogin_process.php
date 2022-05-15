<?php
include '../sql/connect.php';
session_start();
//$ses_userid =$_SESSION[staffID];
//$ses_username = $_SESSION[staffPassword];
if(isset($_POST['logIn'])){
$member = $_POST['memberID'];
$password = $_POST['memberPassword'];

$loginCheck = "SELECT * FROM member WHERE MemberID = '$member' AND Password = '$password' ";
$loginCheckQuery = mysqli_query($connect,$loginCheck);
if(mysqli_num_rows($loginCheckQuery)!=0){
	$s = mysqli_fetch_assoc($loginCheckQuery);
	$_SESSION['memberID'] = $member;
?>
<div class="container bg-light">
<div class="row d-flex justify-content-center">
		<h2>Login Complete</h2>
		<a href="../Home/HomeWback.php"><button>Back To Home</button></a>
</div>
</div>
<?php	
}else{
	header('Location: memberLogin.php');
}
}else if(isset($_GET['logOut'])){
	unset ( $_SESSION[‘memberID’] );
	session_destroy();
?>
<div class="container bg-light">
<div class="row d-flex justify-content-center">
	<h2>Logout Complete</h2>
		<a href="../Home/HomeWback.php"><button>Back To Home</button></a>
</div>
</div>
<?php
}


?>