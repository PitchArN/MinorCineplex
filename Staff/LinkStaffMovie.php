<?php
include '../sql/connect.php';
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
<link href = "North_style.css" rel="stylesheet"/> 

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
<div class="modalcontent">
<br>



<br>
<div class = "row d-flex">
<h3>For Staff</h3>
<br>
</div>

<?php if($staffRole=="MovieStaff"||$staffRole=="Manager"){  ?>

  <div class = "row d-flex">
<form method="get" action="../add Movie/add-movie.php">
    <button type="submit" class = "btn-3">AddMovie</button>
</form>
</div>

<br>
<div class = "row d-flex">
<form method="post" action="add-movie.php">
    <label for="movieID">Select Movie</label>   <br>
    <select name="movieID" class=" form-control">
    <?php $listMovie = "SELECT MovieID,MovieName FROM movie";
          $listMovieQuery = mysqli_query($connect,$listMovie);
          while($mlist = mysqli_fetch_assoc($listMovieQuery)){
    ?>
      <option value="<?php echo $mlist['MovieID']; ?>"><?php echo $mlist['MovieID']." : ".$mlist['MovieName']; ?></option>
    <?php } ?>
    </select>
    
    <button type="submit" name="EditMovie" class = "btn-3">Edit Movie</button>
</form>
          </div><br>
          
        
<?php }
  if($staffRole=="PopcornStaff"||$staffRole=="Manager"){ 
 ?>


<form method="get" action="Stock.php">
    <button type="submit" name="EditWork" class = "btn-3 ">Add Stock</button>
</form>





<br>
<?php }if($staffRole=="TicketStaff"||$staffRole=="Manager"){ ?>


  <a href="../Home/homeWback.php">
    <button type="submit" name="EditWork" class = "btn-3">BuyTicket</button>
  </a>








<?php } ?>


<br>
<?php if($staffRole=="Manager"){ ?>


<!---------------------------- Manager ------------------------------>


<h3>For Manager</h3>
<br>



<a href="../Analysis/analysisHome.php"> <button class = "btn-3">
    Advance Anaylsis Report</button>
</a>

<br>
<br>
  
<form method="get" action="NewStaff.php">
    <button type="submit" class = "btn-3">Add Staff</button>
</form>

<form method="get" action="AddStaffWork.php">
    <label for="staffID">Select Staff</label>   
    <select name="staffID" class=" form-control">
    <?php
      $staffFind = "SELECT * FROM staff";
      $staffQuery = mysqli_query($connect,$staffFind);
      while($aStaff = mysqli_fetch_assoc($staffQuery)){ 
    ?>
      <option value="<?php echo $aStaff['StaffID'];?>">
        <?php echo $aStaff['StaffID'].":".$aStaff['StaffName']; ?>
      </option>
    <?php 
      } 
    ?>
    </select>
    <button type="submit" class = "btn-3">Edit Staff Work</button>
</form>


<?php 
  } 
?>
<br>


<form method="post" action="CheckStaff_process.php">
    <button type="submit" name="logOut" class = "btn-4">LOGOUT</button>
</form>







</body>
</html>