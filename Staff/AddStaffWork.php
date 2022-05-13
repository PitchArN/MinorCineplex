<?php
	include 'connect.php';
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

<br>

<div class="container px-4 bg-light rounded-3">
<br>
<h1>Add Staff Work</h1>
<br>
<h2>Monday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName1" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone1" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone1" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone1" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone1" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Tuesday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType2" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName2" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone2" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone2" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone2" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone2" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Wednesday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName3" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone3" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone3" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone3" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone3" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Thursday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName1" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone4" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone4" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone4" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone4" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Friday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName1" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone5" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone5" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone5" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone5" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Saturday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
	  <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName1" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone6" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone6" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone6" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone6" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>

<h2>Sunday</h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select id="staffType" name="staffType" class="form-select">
        <option>Manager</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
      </select>
    </div>
    <div class ="col">
  <label for="staffName1" class="form-label">Start Time</label>
  <br>
  <input type="radio" id="9.00 - 13.00" name="drone7" value="9.00 - 13.00"
             checked>
      <label for="9.00 - 13.00">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="13.00-17.00" name="drone7" value="13.00-17.00"
             checked>
      <label for="13.00-17.00">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="17.00-21.00" name="drone7" value="17.00-21.00"
             checked>
      <label for="17.00-21.00">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input type="radio" id="21.00-1.00" name="drone7" value="21.00-1.00"
             checked>
      <label for="21.00-1.00">21.00-1.00</label>
</div>
</div>

<br>
<br>



<div class="row gx-3">
<br>
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