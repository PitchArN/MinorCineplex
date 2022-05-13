<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Add Staff</title>
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
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../Popcron/BuyPop.php">Popcorn</a></li>
            <li><a class="dropdown-item" href="../PointPromotion/Test.php">Point Promotion</a></li>
            
            <!--<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>-->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Login</button>
        <button class="btn btn-outline-success" type="submit">Signin</button>
      </form>
      </div>
    </div>
  </div>
</nav>





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



</div>

<style> .bg{
    background: rgba(0,0,0,0.6);
    color: white;
} 
</style>

<div class = "bg">
  <div class="container">
  <footer class="row row-cols-5 py-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-muted">© 2022</p>
    </div>

    <div class="col">

    </div>

    <div class="col" >
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact us</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2022 Minor Cineplex</p>
    </div>
  </footer>
  </div>
</div>
</body>
</html>
