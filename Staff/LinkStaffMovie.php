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



<br><br><br><br>

<br><br><br><br><br><br><br><br><br><br>
<!-- 5555555 -->



<!---- Sample -->
<center><div class="modalcontent">
<br>



<br>


<div class="row gx-3">
<div class="col" >
<form method="get" action="NewStaff.php">
    <button type="submit" class = "btn btn-outline-success me-2 p-3 d-flex ">AddStaff</button>
</form>
</div>
<div class="col" >
<form method="get" action="../add Movie/add-movie.php">
    <button type="submit" class = "btn btn-outline-success me-2 p-3 d-flex ">AddMovie</button>
</form>
</div>
<div class="col" >
<form method="get" action="CheckStaff.php">
    <button type="submit" class = "btn btn-outline-success me-2 p-3 d-flex ">CheckStaff</button>
</form>
</div>

</div>

<br>





<br>


</div></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br>




</body>
</html>