
<?php
  include '../sql/connect.php';
  session_start();
  if(isset($_SESSION['memberID'])){
    $memberID = $_SESSION['memberID'];
  }else{
    $memberID = 0;
  }
  if(isset($_SESSION['staffID'])){
    $staffID =$_SESSION['staffID'];
    $staffRole = $_SESSION['role'];
  }else{
    $staffID = 0;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinorCineplex | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Home.css">
    <!---------- CSS body -------------->

  </head>
<body>
    <!--Weblink -->

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
            <li><a class="dropdown-item" href="../Popcron/GoToBuyPop.php">Popcorn</a></li>
            <li><a class="dropdown-item" href="../PointPromotion/Test.php">Another Products</a></li>
        
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
      </ul>
      <?php
        if($memberID ==0){
      ?>
        <a href="../Member/memberLogin.php"><button class = "btn-2">Login</button></a>
      <?php }else {
        echo "ID:".$memberID." ";?>
        <a href="../Member/memberLogin_process.php?logOut=1"><button class = "btn-2">Logout</button></a>
      <?php }?>
      <form class="d-flex">
      </form>
      </div>
    </div>
  </div>
</nav>




        <!--banner-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <center>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://asicsulb.org/corporate/images/connect/beachfront/2018-03/Movies-on-the-House.jpg" class="d-block w-75" alt="Civi war">
    </div>
    <div class="carousel-item">
      <img src="https://www.asicsulb.org/corporate/images/connect/beachfront/2019-01/movies-on-the-house.jpg" class="d-block w-75" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></center>


<!--Show movie-->
<style> .album{
    background-color: #222222 ;
}</style>

<div class="album py-5">
    <div class="container" >
      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-1">
<?php
  $sql = "SELECT MovieID,MovieName,Poster FROM movie ORDER BY movieID DESC";
  $result = mysqli_query($connect,$sql);
  while($row = mysqli_fetch_assoc($result)){
?>

<!--Show Movie-->
        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "<?php echo $row['Poster'];?>" alt = "<?php echo $row['MovieName']; ?>" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                <a href= "DetailWback.php?movieID=<?php echo $row['MovieID']; ?>" >
                  <div class="image__overlay">
                    <div class="image__title"><?php echo $row['MovieName']; ?></div>
                      <p class="image__description">
                       <?php echo $row['MovieName']; ?>
                      </p>
                  </div></a>  
              </div>
            </div> 
          </div>
        </div>
<?php
  }
?>

      </div>
    </div>
  </div>
     <!-- Contact -->

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