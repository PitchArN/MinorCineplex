 <?php
include '../sql/connect.php';

if(isset($_POST['Regis'])){
	$Name = mysqli_real_escape_string($connect,$_POST['memberName']);
	$type = mysqli_real_escape_string($connect,$_POST['memberType']); 
	$DoB = mysqli_real_escape_string($connect,$_POST['memberDoB']);
	$mail = mysqli_real_escape_string($connect,$_POST['memberMail']);
	$pass = mysqli_real_escape_string($connect,$_POST['memberPassword']);

	$memberCount = "SELECT * FROM member";
	$memberCountQuery = mysqli_query($connect,$memberCount);
	$ID = mysqli_num_rows($memberCountQuery);

	$regisTime = date("Y-m-d H:i:s",strtotime("now"));
	$expTime = date("Y-m-d",strtotime("+1 Year"));
	$sql = "INSERT INTO member(MemberID,MemberMail,MemberType,RegisterDateTime,Password,ExpDate,DateOfBirth) VALUES('$ID','$mail','$type','$regisTime','$pass','$expTime','$DoB') ";

	$Query = mysqli_query($connect,$sql);
		
	header('Location: LinkStaffMovie.php');
	

}
?>