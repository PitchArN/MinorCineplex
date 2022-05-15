<?php
	include '../sql/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Add Staff</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="container bg-light">
	<?php 
		if(isset($_POST['addNewStaff'])){

			$staffName = mysqli_real_escape_string($connect,$_POST['staffName']);
			$staffID = mysqli_real_escape_string($connect,$_POST['staffID']);
			$staffType = mysqli_real_escape_string($connect,$_POST['staffType']);
			$staffMail = mysqli_real_escape_string($connect,$_POST['staffMail']);
			$staffPassword= mysqli_real_escape_string($connect,$_POST['staffPassword']);
			$staffSalary = mysqli_real_escape_string($connect,$_POST['staffSalary']);
			if($staffID!=""){
				$addNewStaff = "INSERT INTO staff(StaffID,StaffMail,StaffType,StaffName,StaffPassword,StaffSalary) VALUES('$staffID','$staffMail','$staffType' ,'$staffName','$staffPassword','$staffSalary')";

			}else{
				$addNewStaff = "INSERT INTO staff(StaffMail,StaffType,StaffName,StaffPassword,StaffSalary) VALUES('$staffMail','$staffType' ,'$staffName','$staffPassword','$staffSalary')";

			}

			$addNewStaffQuery = mysqli_query($connect,$addNewStaff);
			echo "NEW STAFF ADDED";


			//------------ find that staff
			$findStaff = "SELECT StaffID FROM staff WHERE StaffMail = '$staffMail' AND StaffType = '$staffType' AND StaffName = '$staffName' AND StaffPassword = '$staffPassword' AND StaffSalary = '$staffSalary'";
			$findStaffQuery = mysqli_query($connect,$findStaff);
			$thisStaff = mysqli_fetch_assoc($findStaffQuery);

			header( "location: AddStaffWork.php?staffID=".$thisStaff['StaffID']);
 			exit(0);
		}
	?>
</div>
</body>