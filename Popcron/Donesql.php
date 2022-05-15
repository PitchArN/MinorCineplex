<?php
	include '../sql/connect.php';
	session_start();
	if(isset($_SESSION['memberID'])){
		$memberID = $_SESSION['memberID'];
	}
	else
		$memberID = 0;
	if(isset($_SESSION['staffID'])){
		$staffID =$_SESSION['staffID'];
		$staffRole = $_SESSION['role'];
	}
	else
		$staffID = 0;
	$POP = array($_POST['Sweet'], $_POST['Salty'], $_POST['BBQ']);
	$now = date("Y-m-d H-i-s",strtotime("now"));
	$c = 1;
	$sql = "SELECT MAX(i.OrderID) FROM itemorder i";
	$result = mysqli_query($connect,$sql) or die("Bad query");
	$row = mysqli_fetch_row($result);
	if($row[0] == NULL){
		$orderID = 1;
	}
	else{
		$orderID = $row[0] + 1;
	}
	while($c <= 3){
		$index = $c-1;
		if(!empty($POP[$c-1])){
			$sql = "UPDATE itemstock SET Remain = Remain - $POP[$index] WHERE `itemstock`.`ItemID` = $c";
			$result = mysqli_query($connect,$sql) or die("Bad query");
			$sql = "INSERT INTO `itemorder` (`OrderID`, `TimeDate`, `ItemID`, `MemberID`, `Quantity`, `StaffID`, `PurchaseType`) VALUES ('$orderID', '$now', '$c', '$memberID', '$POP[$index]', '$staffID', 'CASH')";
			$result = mysqli_query($connect,$sql) or die("Bad query");
		}
		$c++;
	}
	header('Location:../Home/HomeWback.php');
?>