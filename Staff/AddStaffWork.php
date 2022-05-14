<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Add Staff Work</title>
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

<br>

<?php 
	if(isset($_GET['staffID'])){
		$staffID = mysqli_real_escape_string($connect,$_GET['staffID']);
?>
<!------------------------------ CONTENT FOR ADD WORK ------------------------------>
<form action="AddStaffWork_process.php" enctype="multipart/form-data" method="post">
<div class="container px-4 bg-light rounded-3">
<br>
<h1>Add Staff Work</h1>
<?php 
	$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	foreach($days as $d){
?>
<br>
<h2><?php echo $d ?></h2>
<div class="row gx-3">
<div class="col">
  <label for="staffType" class="form-label">Work Type</label>
      <select name="<?php echo $d."work"; ?>" class="form-select">
	  	<option>Manage</option>
        <option>SalesTicket</option>
        <option>SalesPopcorn</option>
        <option>Receptionist</option>
      </select>
    </div>
  <div class ="col">
  <label for="staffName1" class="form-label">Work Time</label>
  <br>
  	<h7>4 Hour Shift</h7><br>
  	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."9"; ?>" value="9-13" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."9"; ?>">9.00 - 13.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."13"; ?>" value="13-17" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."13"; ?>">13.00-17.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."17"; ?>" value="17-21" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."17"; ?>">17.00-21.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."21"; ?>" value="21-1" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."21"; ?>">21.00-1.00</label>
      <br>
      <h7>8 Hour Shift</h7><br>
      <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."9-18"; ?>" value="9-18" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."9-18"; ?>">9.00-12.00 | 13.00-18.00</label>
	  &nbsp;&nbsp;&nbsp;
	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."18-1"; ?>" value="17-1" required>
      <label class="btn btn-outline-warning" for="<?php echo $d."18-1"; ?>">17.00-1.00</label>
      &nbsp;&nbsp;&nbsp;
	  <input class="btn-check" type="radio" name="<?php echo $d."time"; ?>" id="<?php echo $d."df"; ?>" value="dayOff" required>
      <label class="btn btn-outline-danger" for="<?php echo $d."df"; ?>">DAY OFF</label><br>


</div>
</div>

<?php 
	}
?>
<br>
<div class="row gx-3">
<br><br>
<input type="hidden" name="staffID" value="<?php echo $staffID; ?>">
<center><input type="submit" class = "btn btn-outline-success me-2 "  name="addStaffWork" value="SUBMIT"></center>
<br>
</form>
</div>
<br>
</div>
<br><br>



</div>

<?php 
	}
?>
<!---------------------------- END OF CONTENT ----------------------------------------->
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