<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Member</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "../popcron/tien_style.css" rel="stylesheet"/> 

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../Utility/pngtree-initial-m-graphic-design-template-vector-isolated-illustration-png-image_1716255-removebg-preview.PNG" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Minor Cineplex
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Home/HomeWback.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../Popcron/BuyPop.php">Popcorn</a></li>
            <li><a class="dropdown-item" href="../PointPromotion/Test.php">Another Products</a></li>
        
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
      </form>
      </div>
    </div>
  </div>
</nav>





<br><br><br><br><br><br><br><br>
<!-- 5555555 -->



<!---- Sample -->
<form action="NewStaff_process.php" enctype="multipart/form-data" method="post">
<div class="container px-4 bg-light rounded-3">
<br>
<h1>Member Registor</h1>

<div class="row gx-3">
    <div class ="col">
  <label for="staffName" class="form-label">Name</label>
  <input type="text" class="form-control" id="staffName" name="staffName" placeholder="First-SurNeme" required>
</div>
</div>

<br>


<div class="row gx-3">
<div class="col">
  <label for="staffID" class="form-label">DateOfBirth</label>
  <input type="Date" class="form-control" id="staffID" name="staffID">
</div>
<div class="col">
  <label for="staffType" class="form-label">Member Type</label>
      <select id="staffType" name="staffType" class="form-select">
        <option>premium</option>
        <option>Normal</option>
      </select>
    </div>
</div>
<br>

<div class="row gx-3">
<div class="col">
  <label for="staffMail" class="form-label">E-Mail</label>
  <input type="email" class="form-control" id="staffMail" name="staffMail" required>
</div>
<br>

<div class="col">
  <label for="staffPassword" class="form-label">Password</label>
  <input type="password" class="form-control" id="staffPassword" name="staffPassword" required>
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


<br><br><br><br>

<center><input type="submit" class = "btn me-2"  name="addNewStaff" value="Registor"></center>
<br>
</form>
</div>
<br>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>



</div>



 
  
</body>
</html>
