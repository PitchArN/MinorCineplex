<?php
	include 'D:\connect.php';
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
			$sql = "INSERT INTO `itemorder` (`OrderID`, `TimeDate`, `ItemID`, `MemberID`, `Quantity`, `StaffID`, `PurchaseType`) VALUES ('$orderID', '$now', '$c', '1', '$POP[$index]', '1', 'CASH')";
			$result = mysqli_query($connect,$sql) or die("Bad query");
		}
		$c++;
	}
	header('Location:../Home/HomeWback.php');
?>