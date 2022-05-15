<?php 
    include '../sql/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>STAFF|Showtime</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link rel="stylesheet" href="style.css">


</head>

<body>
    <br><br>
<div class="container px-4 bg-light rounded-3">
<?php 
    if(isset($_GET['movieID'])){
?>
    <br>
    <div class="row gx-3">
        <div class="col">
    <h1>Add Showtime Of:</h1>
        </div>
    <div class="col">
        <div class="px-2 rounded-3 bg-warning">
            <h1>
<?php
    
        $movieID = mysqli_real_escape_string($connect,$_GET['movieID']);        
        $sql = "SELECT * FROM movie WHERE movieID = '$movieID'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
        echo $row['MovieName'];
?></h1>
</div>

</div>


<div class="row gx-3">
<div class="col">
    <h3>Select Date to Add Movie Showtime</h3>
</div>
<div class="col">
    <div class="px-2 rounded-3">
    <?php
    // define time to select showtime
    $now = strtotime("now");
    $nextThreeMonth = strtotime("+3 month");
    echo "Editable Showtime <br>From: ".date("d-m-Y",$now)." | To: ".date("d-m-Y",$nextThreeMonth);
?><br><br>
    </div>
</div>

</div>

<form action="add-showtime.php" enctype="multipart/form-data" method="post">
<div class="row gx-3">
<div class="col">
<label for="start"><h5>First date:  </h5></label>
</div>
<div class="col">
<label for="end"><h5>Last date:  </h5></label>
</div>
</div>
<div class="row gx-3">
<div class="col">
<input type="date" id="start" name="start" 
        value="<?php echo date("Y-m-d",$now); ?>"
        min="<?php echo date("Y-m-d",$now); ?>" 
        max ="<?php echo date("Y-m-d",$nextThreeMonth); ?>"  
        class="form-control">
</div>
<div class="col">

<input type="date" id="end" name="end" 
        value="<?php echo date("Y-m-d",$now); ?>"
        min="<?php echo date("Y-m-d",$now); ?>" 
        max ="<?php echo date("Y-m-d",$nextThreeMonth); ?>" 
        class="form-control"> 
</div>
<br><br>
</div>
<div class="row gx-3">
<div class="col">
    <input type="text" name="movieID" id="movieID" value="<?php echo $movieID ?>" hidden>
    <input class="btn-warning rounded-3" type="submit" name="selectedDate" id= "selectedDate" value="CONFIRM DATE">
    <br><br>
</div>
</div>
</form>

<!------------------------- SELECT TIME FOR EACH DAY ------------------------------>

<?php 
    }

    if(isset($_POST['selectedDate'])){
        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $StartDate = mysqli_real_escape_string($connect,$_POST['start']);
        $EndDate = mysqli_real_escape_string($connect,$_POST['end']);

?>
<form action="add-showtime_process.php" enctype="multipart/form-data" method="post">
    <input type="text" name="movieID" id="movieID" value="<?php echo $movieID;?>" hidden>


<div class="row gx-3">
<div class="col">
    <br><br>
    <h3> Add Showtime For Each Date</h3>
</div>
</div>
<?php
        //create range of date 
        $DateRange = array();
        $startDate = strtotime($StartDate);
        $endDate = strtotime($EndDate);
             
        for ($currentDate = $startDate; $currentDate <= $endDate; 
                                        $currentDate += (86400)) {
                                                
            $date = date('Y-m-d', $currentDate);
            $DateRange[] = $date;
        }
        $DateInputCount = 1;
        $DateCount = 0;
        foreach($DateRange as $d){
?>
<div class="row gx-3">
<div class="col">

    <h5>
<?php
            $DateCount++;
            echo $d;
?>
    </h5>
</div>
<div class="row gx-3">
<div class="col">
<div class="form-group">
    <input type="date" name="date<?php echo $DateCount;?>" id="date<?php echo $DateCount;?>" value="<?php echo $d;?>" hidden>
    <select class="btn btn-secondary form-control" name="<?php echo $DateInputCount; ?>room" id="<?php echo $DateInputCount; ?>room">
        <option value="R1">Room 1</option>
        <option value="R2">Room 2</option>
        <option value="R3">Room 3</option>
        <option value="R4">Room 4</option>
        <option value="R5">Room 5</option>
        <option value="R6">Room 6</option>
    </select>
    <?php //echo $DateInputCount."time"; ?>
    <input type="text" id="<?php echo $DateInputCount; ?>time" name="<?php echo $DateInputCount++; ?>time" class="time-pickable form-control" placeholder="Showtime" readonly>
</div>
 </div>
<div class="col">
 <div class="form-group">
    <select class="btn btn-secondary form-control" name="<?php echo $DateInputCount; ?>room" id="<?php echo $DateInputCount; ?>room">
        <option value="R1">Room 1</option>
        <option value="R2">Room 2</option>
        <option value="R3">Room 3</option>
        <option value="R4">Room 4</option>
        <option value="R5">Room 5</option>
        <option value="R6">Room 6</option>
    </select>
    <?php //echo $DateInputCount."time"; ?>
    <input type="text" id="<?php echo $DateInputCount; ?>time" name="<?php echo $DateInputCount++; ?>time" class="time-pickable form-control" placeholder="Showtime" readonly>
</div>
</div>
<div class="col">
<div class="form-group">
    <select class="btn btn-secondary form-control rounded-3" name="<?php echo $DateInputCount; ?>room" id="<?php echo $DateInputCount; ?>room">
        <option value="R1">Room 1</option>
        <option value="R2">Room 2</option>
        <option value="R3">Room 3</option>
        <option value="R4">Room 4</option>
        <option value="R5">Room 5</option>
        <option value="R6">Room 6</option>
    </select>

    <input type="text" id="<?php echo $DateInputCount; ?>time" name="<?php echo $DateInputCount++; ?>time" class="time-pickable form-control" placeholder="Showtime" readonly>
</div>
</div>
<div class="col">
 <div class="form-group">
   <select class="btn btn-secondary form-control" name="<?php echo $DateInputCount; ?>room" id="<?php echo $DateInputCount; ?>room">
        <option value="R1">Room 1</option>
        <option value="R2">Room 2</option>
        <option value="R3">Room 3</option>
        <option value="R4">Room 4</option>
        <option value="R5">Room 5</option>
        <option value="R6">Room 6</option>
    </select>

    <input type="text" id="<?php echo $DateInputCount; ?>time" name="<?php echo $DateInputCount++; ?>time" class="time-pickable form-control" placeholder="Showtime" readonly>
</div>
</div>
<div class="col">
    <div class="form-group">
    <select class="btn btn-secondary form-control" name="<?php echo $DateInputCount; ?>room" id="<?php echo $DateInputCount; ?>room">
        <option value="R1">Room 1</option>
        <option value="R2">Room 2</option>
        <option value="R3">Room 3</option>
        <option value="R4">Room 4</option>
        <option value="R5">Room 5</option>
        <option value="R6">Room 6</option>
    </select>

    <input type="text" id="<?php echo $DateInputCount; ?>time" name="<?php echo $DateInputCount++; ?>time" class="time-pickable form-control" placeholder="Showtime" readonly>
</div>
</div>

</div>
</div>
<br>
<?php
    }
?>
<div class="row gx-3">
  <div class="col">
    <h5>Price Rate</h3>
  </div></div>
<div class="row gx-3">
  <div class="col">
   <label class="form-label" for="NormalSeatPrice">Normal Seat</label>
   <input class="form-control" type="number" name="NormalSeatPrice" min="0" required>
   <br>
  </div>
  <div class="col">
    <label class="form-label" for="PremiumSeatPrice">Premium Seat</label>
    <input class="form-control" type="number" name="PremiumSeatPrice" min="0" required>
    <br>
  </div>
  
</div>

<div class="row gx-3">
<div class="col">
    <input type="text" name="DateCount" value="<?php echo $DateCount ?>" hidden>
    <input type="submit" class="btn-warning rounded-3" value="ADD SHOW TIME" id="AddShowtime" name="AddShowtime">
    <br><br>
</div></div>
</form>
<?php

}

?>

</div>
<script>
        function activate() {
    document.head.insertAdjacentHTML("beforeend", `
        <style>
            .time-picker {
                position: absolute;
                display: inline-block;
                padding: 10px;
                background: #eeeeee;
                border-radius: 6px;
            }

            .time-picker__select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                outline: none;
                text-align: center;
                border: 1px solid #dddddd;
                border-radius: 6px;
                padding: 5px 5px;
                background: #ffffff;
                cursor: pointer;
                font-family: 'Heebo', sans-serif;
            }
        </style>
    `);

    document.querySelectorAll(".time-pickable").forEach(timePickable => {
        let activePicker = null;

        timePickable.addEventListener("focus", () => {
            if (activePicker) return;

            activePicker = show(timePickable);

            const onClickAway = ({ target }) => {
                if (
                    target === activePicker
                    || target === timePickable
                    || activePicker.contains(target)
                ) {
                    return;
                }

                document.removeEventListener("mousedown", onClickAway);
                document.body.removeChild(activePicker);
                activePicker = null;
            };

            document.addEventListener("mousedown", onClickAway);
        });
    });
}

function show(timePickable) {
    const picker = buildPicker(timePickable);
    const { bottom: top, left } = timePickable.getBoundingClientRect();

    picker.style.top = `${top}px`;
    picker.style.left = `${left}px`;

    document.body.appendChild(picker);

    return picker;
}

function buildPicker(timePickable) {
    const picker = document.createElement("div");
    const hourOptions = [10, 11, 12, 13,14,15,16,17,18,19,20,21,22].map(numberToOption);
    const minuteOptions = [0, 10,20, 30, 40, 50].map(numberToOption);

    picker.classList.add("time-picker");
    picker.innerHTML = `
        <select class="time-picker__select">
            ${hourOptions.join("")}
        </select>
        :
        <select class="time-picker__select">
            ${minuteOptions.join("")}
        </select>
        
    `;

    const selects = getSelectsFromPicker(picker);

    selects.hour.addEventListener("change", () => timePickable.value = getTimeStringFromPicker(picker));
    selects.minute.addEventListener("change", () => timePickable.value = getTimeStringFromPicker(picker));
    

    if (timePickable.value) {
        const { hour, minute } = getTimePartsFromPickable(timePickable);

        selects.hour.value = hour;
        selects.minute.value = minute;
        
    }

    return picker;
}

function getTimePartsFromPickable(timePickable) {
    const pattern = /^(\d+):(\d+) $/;
    const [hour, minute] = Array.from(timePickable.value.match(pattern)).splice(1);

    return {
        hour,
        minute,
    };
}

function getSelectsFromPicker(timePicker) {
    const [hour, minute] = timePicker.querySelectorAll(".time-picker__select");

    return {
        hour,
        minute,
    };
}

function getTimeStringFromPicker(timePicker) {
    const selects = getSelectsFromPicker(timePicker);

    return `${selects.hour.value}:${selects.minute.value} `;
}

function numberToOption(number) {
    const padded = number.toString().padStart(2, "0");

    return `<option value="${padded}">${padded}</option>`;
}

activate();
    </script>



</body>
