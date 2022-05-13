<?php
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
<br><br>
<!-- 5555555 -->



<!---- Sample -->
<form action="NewStaff_process.php" enctype="multipart/form-data" method="post">
<div class="container px-4 bg-light rounded-3">
<br>
<h1>Add Staff</h1>

<div class="row gx-3">
    <div class ="col">
  <label for="staffName" class="form-label">Staff Name</label>
  <input type="text" class="form-control" id="staffName" name="staffName" placeholder="Staff Name" required>
</div>
</div>

<br>


<div class="row gx-3">
<div class="col">
  <label for="staffID" class="form-label">ID</label>
  <input type="number" class="form-control" id="staffID" name="staffID">
</div>
<div class="col">
  <label for="staffType" class="form-label">Staff Type</label>
      <select id="staffType" name="staffType" class="form-select">
        <option>Manager</option>
        <option>TicketStaff</option>
        <option>MovieStaff</option>
        <option>PopcornStaff</option>
      </select>
    </div>
</div>
<br>

<div class="row gx-3">
<div class="col">
  <label for="staffMail" class="form-label">Staff Mail</label>
  <input type="email" class="form-control" id="staffMail" name="staffMail" required>
</div>
<br>

<div class="col">
  <label for="staffPassword" class="form-label">Staff Password</label>
  <input type="password" class="form-control" id="staffPassword" name="staffPassword" required>
</div>
</div>
<br>


<!-------
<div class="row gx-3">
  <label for="" class="form-label">Salary</label>
  <div class="col">
<div class="border border-3 rounded-3">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1">10,000</label>
</div>
</div>
<div class="col">
<div class="border border-3 rounded-3">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle2">15,000</label>
</div>
</div>
<div class="col">
<div class="border border-3 rounded-3">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle3">20,000</label>
</div>
</div>
<div class="col">
<div class="border border-3 rounded-3">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle4">25,000</label>
</div>
</div>
<div class="col">
<div class="border border-3 rounded-3">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle5">30,000</label>
</div>
</div>
-------->
<div class="row gx-3">
<div class="col">
    <label for="staffSalary">Staff Salary</label>
    <input  class="border border-3 rounded-3" type="number" name="staffSalary" id="staffSalary" min="0" required>

</div>
</div>

<br>

<center><input type="submit" class = "btn btn-outline-success me-2 "  name="addNewStaff" value="SUBMIT"></center>
<br>
</form>
</div>
<br>
</div>
<br><br>
</body>
</html>
