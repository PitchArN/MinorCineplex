<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
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


<div class ="container c1">
<!--Movie sales-->
<h1>Movie sales</h1>
<table class="table table-hover">
  <thead>
    <tr align = "center">
      <th scope="col">MovieID </th>
      <th scope="col">Movie Name</th>
      <th scope="col">Genre</th>
      <th scope="col">Lenght</th>
      <th scope="col">Rate Ages </th>
      <th scope="col">Rating</th>
      <th scope="col">TotalMovieshowtime</th>
      <th scope="col">TicketSales</th>
    </tr>
  </thead>
  <tbody>
    <tr align = "center">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<!--Most viewed genre-->
<div class ="container">
<h1>Most viewed genre</h1>
<table class="table table-hover">
  <thead >
    <tr align = "center">
      <th scope="col">Genre</th>
      <th scope="col">number of seats purchased</th>
      <th scope="col">Total number of rounds</th>
      <th scope="col">Number of movies in genre</th>
      <th scope="col">movies with people buying tickets most in this genre </th>
      <th scope="col">Number of movie tickets sold most in this genre</th>
      <th scope="col">The number of showtimes for the most sold movie in this genre</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Action</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Adventure</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Comedy</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


<!--Popular Products-->
<div class ="container">
<h1>Popular Products</h1>
<table class="table table-hover">
  <thead >
    <tr align = "center">
      <th scope="col">itemID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Type</th>
      <th scope="col">Sales</th>
      <th scope="col">Total amount</th>
      <th scope="col">Price</th>
      <th scope="col">Most Buying Member Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>



<!--Staff work-->
<div class ="container">
<h1>Staff work</h1>
<table class="table table-hover">
  <thead >
    <tr align = "center">
      <th scope="col">StaffID</th>
      <th scope="col">Name</th>
      <th scope="col">staffType</th>
      <th scope="col">LateCount</th>
      <th scope="col">TotalOrder Count</th>
      <th scope="col">Salary</th>
      <th scope="col">Mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<!--Popular Promotion-->
<div class ="container">
<h1>Popular Promotion</h1>
<table class="table table-hover">
  <thead >
    <tr align = "center">
      <th scope="col">promotionID</th>
      <th scope="col">proName</th>
      <th scope="col">proDetail</th>
      <th scope="col">proType</th>
      <th scope="col">proCondition</th>
      <th scope="col">ProStart DateTime</th>
      <th scope="col">proEnd DateTime</th>
      <th scope="col">Total Used Count</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>






</body>
</html>