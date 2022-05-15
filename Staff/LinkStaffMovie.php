<?php
include 'connect.php';
session_start();
$staffID =$_SESSION['staffID'];
$staffRole = $_SESSION['role'];
if(empty($_SESSION['staffID'])){
  header('Location: CheckStaff.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo "STAFF | ".$staffID;  ?></title>
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



<!---- Sample -->
<center><div class="modalcontent">
<br>



<br>
<div class="row gx-3">
<h3>For Staff</h3>
</div><br>

<div class="row gx-3">
<?php if($staffRole=="MovieStaff"||$staffRole=="Manager"){  ?>
<div class="col" >
<form method="get" action="../add Movie/add-movie.php">
    <button type="submit" class = "btn btn-outline-success me-2 p-3 d-flex ">AddMovie</button>
</form>
</div>
<div class="col" >
<form method="post" action="add-movie.php">
    <label for="movieID">Select Movie</label>   
    <select name="movieID" class=" form-control">
    <?php $listMovie = "SELECT MovieID,MovieName FROM movie";
          $listMovieQuery = mysqli_query($connect,$listMovie);
          while($mlist = mysqli_fetch_assoc($listMovieQuery)){
    ?>
      <option value="<?php echo $mlist['MovieID']; ?>"><?php echo $mlist['MovieID']." : ".$mlist['MovieName']; ?></option>
    <?php } ?>
    </select>
    <button type="submit" name="EditMovie" class = "btn btn-outline-success me-2 p-3 d-flex  form-control">Edit Movie</button>
</form>
</div>
<?php }
  if($staffRole=="PopcornStaff"||$staffRole=="Manager"){ 
 ?>
<div class="col" >
<form method="get" action="">
    <button type="submit" name="EditWork" class = "btn btn-outline-success me-2 p-3 d-flex ">Add Stock</button>
</form>
</div>

<br>
<?php }if($staffRole=="TicketStaff"||$staffRole=="Manager"){ ?>
<div class="col" >
<form method="get" action="">
    <button type="submit" name="EditWork" class = "btn btn-outline-success me-2 p-3 d-flex ">BuyTicket</button>
</form>
</div>
<?php } ?>
</div>

<br>
<?php if($staffRole=="Manager"){ ?>
<!---------------------------- Manager ------------------------------>

<div class="row gx-3">
<h3>For Manager</h3>
</div><br>

<div class="row gx-3">
<div class="col" >
<a href="../Analysis/analysisHome.php" class = "btn btn-outline-success me-2 p-3 d-flex justify-content-center">
    Advance Anaylsis Report
</a>
</div>
</div><br>
<div class="row gx-3 form-group">
  <div class="col" >
<form method="get" action="NewStaff.php">
    <button type="submit" class = "btn btn-outline-success me-2 p-3 d-flex  form-control">Add Staff</button>
</form>
</div>
<div class="col" >
<form method="get" action="AddStaffWork.php">
    <label for="staffID">Select Staff</label>   
    <select name="staffID" class=" form-control">
      <option>1</option>
    </select>
    <button type="submit" name="EditWork" class = "btn btn-outline-success me-2 p-3 d-flex  form-control">Edit Staff Work</button>
</form>
</div>
</div>
<?php 
  } 
?>
<br>
<div class="row gx-3 form-group">
<div class="col" >
<form method="post" action="CheckStaff_process.php">
    <button type="submit" name="logOut" class = "btn btn-outline-danger me-2 p-3 d-flex  form-control">LOGOUT</button>
</form>
</div>
</div>
<br>

<br>





<br>


</div></center>
<br><br><br><br><br><br><br><br><br><br><br>





</body>
</html>