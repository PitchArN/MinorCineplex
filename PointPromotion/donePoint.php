<?php
	include '../sql/connect.php';
	session_start();
	if(isset($_SESSION['memberID'])){
		$memberID = $_SESSION['memberID'];
	}
	if(isset($_SESSION['staffID'])){
		$staffID =$_SESSION['memberID'];
		$staffRole = $_SESSION['role'];
	}
	else
		$staffID = 0;
	$now = date("Y-m-d H-i-s",strtotime("now"));
	$sql = "SELECT MAX(i.OrderID) FROM itemorder i";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	$row = mysqli_fetch_row($result);
	if($row[0] == NULL){
		$orderID = 1;
	}
	else{
		$orderID = $row[0] + 1;
	}
	$sql = "SELECT Price FROM itemstock WHERE ItemID = 2";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	$row = mysqli_fetch_row($result);
	$price = $row[0];
	$sql = "UPDATE itemstock SET Remain = Remain - 1 WHERE `itemstock`.`ItemID` = 2";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	$sql = "UPDATE member SET MemberPoint = MemberPoint - $price WHERE `member`.`MemberID` = $memberID;";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	$sql = "INSERT INTO `itemorder` (`OrderID`, `TimeDate`, `ItemID`, `MemberID`, `Quantity`, `StaffID`, `PurchaseType`) VALUES ('$orderID', '$now', '2', '$memberID', '1', '$staffID', 'POINT')";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	header('Location:../PointPromotion/Promotion_End.php');
?>