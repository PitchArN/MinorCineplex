<?php
	include 'D:\connect.php';
	$c = 0;
	$POP = array($_POST['Sweet'], $_POST['Salty'], $_POST['BBQ']);
	while($c <= 2){
		$sql = "SELECT Remain FROM itemstock WHERE ItemID = $c";
		$result = mysqli_query($connect,$sql) or die("Bad query");
		$row = mysqli_fetch_row($result);
		$SUM = $row[0] - $POP[$c];
		$sql = "UPDATE `itemstock` SET `Remain` = '$SUM' WHERE `itemstock`.`ItemID` = $c";
		mysqli_query($connect,$sql) or die("Bad query");
		echo $SUM."<br>";
		$c++;
	}
?>