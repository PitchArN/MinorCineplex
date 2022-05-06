<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Movie</title>
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
<form>
<div class="container px-4 bg-light rounded-3">
<br>
<h1>Add Staff</h1>

<div class="row gx-3">
    <div class ="col">
  <label for="MovieName" class="form-label">Staff Name</label>
  <input type="text" class="form-control" id="movieName" placeholder="Staff Name" required>
</div>
</div>

<br>


<div class="row gx-3">
<div class="col">
  <label for="lenght" class="form-label">ID</label>
  <input type="int" class="form-control" id="movieLenght" required>
</div>
<div class="col">
  <label for="rating" class="form-label">Staff Type</label>
      <select id="disabledSelect" class="form-select">
        <option>Disable</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
      </select>
    </div>
</div>
<br>

<div class="row gx-3">
<div class="col">
  <label for="rateAge" class="form-label">Staff Mail</label>
  <input type="int" class="form-control" id="movieRateAge" required>
</div>
<br>

<div class="col">
  <label for="posterURL" class="form-label">Staff Password</label>
  <input type="link" class="form-control" id="posterURL" required>
</div>
</div>
<br>



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


<br><br>







<br><br>
</div>
</form>
</div>
<center><button class = "btn btn-outline-success me-2 " >SUBMIT</button></center>

<br><br>
</body>
</html>
