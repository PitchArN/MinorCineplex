<?php
	include '../sql/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Add Staff Work</title>
<!---------- Boothstrap ------->

<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "Staff_decorate.css" rel="stylesheet"/> 

</head>
<body>
<br><br>
<div class="container px-4 bg-light rounded-3" align ="center">
	<?php
		if(isset($_POST['addStaffWork'])){

			$staffID = mysqli_real_escape_string($connect,$_POST['staffID']);
			echo "<br><h2>".$staffID."</h2>";
			$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
			foreach($days as $d){
				$workTimeCheck = $d."time";
				$workTypeCheck = $d."work";
				if(!empty($_POST[$workTimeCheck])){
					$daySplit = (str_split($d,3));
					$dayShorts = $daySplit[0];
					$workType = mysqli_real_escape_string($connect,$_POST[$workTypeCheck]);
					$workTime = mysqli_real_escape_string($connect,$_POST[$workTimeCheck]);
					if($workTime == "9-13"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("9:00"));
						$endWorkTime = date("H:i:s",strtotime("13:00"));
						//StaffID WorkDay WorkStartTime WorkEndTime WorkType 	
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";
						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}else if($workTime == "13-17"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("13:00"));
						$endWorkTime = date("H:i:s",strtotime("17:00"));
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";

						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}else if($workTime == "17-21"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("17:00"));
						$endWorkTime = date("H:i:s",strtotime("21:00"));
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";


						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}else if($workTime == "21-1"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("21:00"));
						$endWorkTime = date("H:i:s",strtotime("1:00"));
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";


						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}else if($workTime == "9-18"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("9:00"));
						$endWorkTime = date("H:i:s",strtotime("18:00"));
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";


						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}else if($workTime == "17-1"){
						echo "<h4>Shift Added</h4><div class='row bg-success rounded-3'>";
						$startWorkTime = date("H:i:s",strtotime("17:00"));
						$endWorkTime = date("H:i:s",strtotime("1:00"));
						$addWork = "INSERT INTO staffwork(StaffID,WorkDay,WorkStartTime, WorkEndTime,WorkType) VALUES('$staffID','$dayShorts','$startWorkTime','$endWorkTime','$workType')";
						$addWorkSQL = mysqli_query($connect,$addWork);
						echo $dayShorts." | ".$startWorkTime." - ".$endWorkTime."</div>";


						//echo $staffID.$dayShorts.$startWorkTime.$endWorkTime.$workType;

					}//else if($workTime == "dayOff")

				}
			}
		}

	?>
<br>

<div class="row-1 d-flex justify-content-center">
    <center><a href = "LinkStaffMovie.php"><button class = "btn-2" type= "button">Finish</button></a></center>
</div><br>
</div>

</body>