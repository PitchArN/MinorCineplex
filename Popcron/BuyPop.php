<?php
  include '../sql/connect.php';
  session_start();
  if(isset($_SESSION['memberID'])){
    $memberID = $_SESSION['memberID'];
  }
  if(isset($_SESSION['staffID'])){
    $staffID =$_SESSION['memberID'];
    $staffRole = $_SESSION['role'];
  }
?>
<html>
    <head>
        <title>MinorCineplex | Popcorn</title>
        <link rel="stylesheet" href="tien_style.css">
        <!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
<div class="PromotionBanner">
            <div class="Promotion1">
                <div class="Content1">



    <center><div>
        <h1>Pop Corn</h1>
    </div></center>
	<?php
  if ($_SESSION['empty'] == 1) {
    ?>
	<br>
	<center><div class="box"><h5>Cannot create order</h5></div> </center>
	<?php
  }
  $_SESSION['empty'] = 0;
?>
<p></p>
    <form action = "Cart.php" method = "post" enctype = "multipart/form-data">

    <div class="row gx-3">

    
<div class="col">

                    
                <h1>Sweet</h1>
                <img class="image" src="1.jpg"><br>
                <?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 1";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
                        <input type="number" class="form-control" name = "Sweet" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>" font >

        </div>
        <div class="col">
  
                    
                <h1>Salty</h1>
                <img class="image" src="2.jpg" ><br>
                <?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 2";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
        <input type="number" class="form-control" name = "Salty" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>">

        </div>
        <div class="col">

                    
                <h1>BQQ</h1>
                <img class="image" src="3.jpg" ><br>
                <?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 3";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
        <input type="number" class="form-control" name = "BBQ" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>">
                </div>
            </div>
        


<center><div >
  <br>
<center><q>Add all selected popcorn to the cart</q></center><br>
<center><input type = "submit" class = "btn-2" name = "AddToCart" value = "add to cart" ></center>
    </div></center>
    </div>
        </div>
        </div>
<br><br><br>
</form>
<!-- Contact -->


<style> .bg{
    background: rgba(0,0,0,0.6);
    color: white;
} 
</style>


<!---------------------------- Footer ------------------------>
<div class = "bg">
  <div class="container">
  <footer class="row row-cols-5 py-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>

    <div class="col">

    </div>

    
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2022 Minor Cineplex</p>
    </div>
  </footer>
  </div>
</div>
    </body>
</html>
