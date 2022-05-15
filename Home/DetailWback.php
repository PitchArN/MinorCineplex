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
    <title>MinorCineplex | Movies</title>
  
    <meta name="description" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">


    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Detail.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        background-image: url('WebsiteBG1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .MovieName{
          color:white;
      }
    </style>
    
    
</head>
<body data-new-gr-c-s-check-loaded="14.1057.0" data-gr-ext-installed="" class="vsc-initialized">
  <!-- web head-->
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



<?php
if(isset($_GET['movieID'])){
  $mID = mysqli_real_escape_string($connect,$_GET['movieID']); 
  $sql = "SELECT * FROM movie WHERE MovieID='$mID'";
  $result = mysqli_query($connect,$sql);
  $data = mysqli_fetch_assoc($result);

  $movieName = $data['MovieName'];
  $movieDes = $data['Details'];
  $movieLenght = $data['Length'];
  $movieRating = $data['Rating'];
  $movieRateAge = $data['RateAges'];
  $moviePoster = $data['Poster'];
  $movieTrailer = $data['TrailerURL'];

?>
    <main>
      <div class="container py-4">
        <div class="row">
        <header class="pb-3 mb-4 border-bottom">
          <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
            <!---span class="fs-4">Movie Detail</span--->
          </a>
        </header>
        </div>
        

        <div class="row">
          <div class="col px-3">
<div class = "MovieName">
        <h1 class="display-5 fw-bold" ><?php echo $movieName; ?></h1>
</div>
</div></div>
            <div class="container-fluid py-5">
      <div class="container" >
 <div class="row row-cols-md-4 g-1 d-flex align-items-center">

        <div class="col">
              <img src = "<?php echo $moviePoster ?>" alt = "<?php echo $movieName; ?>" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
    
        <div class="col">
        <iframe width="788" height="450"  src="<?php echo $movieTrailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
 </div> 

      </div>

    </div>
    </div>

            <div class="p-5 mb-4 bg-light rounded-3">
               <div class="row">
                <div class="col">
                    <p class="col-md-8 " ><?php echo "<b>Lenght:</b> ".$movieLenght." minute" ; ?></p>
                </div>
                <div class="col">
                    <p class="col-md-8 " ><?php echo "<b>Rating:</b> ".$movieRating; ?></p>
                </div>
                <div class="col">
                    <p class="col-md-8 " ><?php echo "<b>Ages Rate</b>:".$movieRateAge; ?></p>
                    
                </div>
              </div>
               <div class="row">
                <div class="col">
                  <p class="col-md-8 " ><?php echo $movieDes; ?></p>
                </div>
               </div>
              <!-------------- Actor Tab---------------------->
              <div class="row">
                <h3>Feature Actors</h3>
              </div>
            <div class="row">
                <div class="form-group">
                <?php 
                  $actor = "SELECT * FROM actor INNER JOIN movieactor ON actor.ActorID = movieactor.ActorID WHERE MovieID ='$mID' ";
                  $actorQuery = mysqli_query($connect,$actor);
                  while($anActor = mysqli_fetch_assoc($actorQuery)){
                ?>
                
                  <button class="btn btn-warning btn-lg" type="button">
                    <?php echo $anActor['ActorName']; ?></button>
                
                <?php
                  }
                ?>
                <br><br>
              </div>
              </div>
              <!-------------- Booking Tab ------------------->
              <div class="row">
                <h3>Showtime</h3>
              </div>
              <div class="row">
                <?php
                    $lastDate = "0";
                    $showTime = "SELECT * FROM movietime WHERE MovieID='$mID' ORDER BY StartDateTime ASC";
                    $showTimeQuery = mysqli_query($connect,$showTime);
                    if(mysqli_num_rows($showTimeQuery)>0){
                    while($show = mysqli_fetch_assoc($showTimeQuery)){
                      $dataDate = date("d M",strtotime($show['StartDateTime']));
                      if($lastDate=="0"){
                        echo "<h3>".$dataDate."</h3>";
                      }else if($dataDate!=$lastDate){
                        echo "</div><div class='row'><h3>".$dataDate."</h3></div><div class='row'>";
                      }
                      $dataTime = date("h:i",strtotime($show['StartDateTime']));
                      $lastDate = $dataDate;
                ?>
                <div class="col">
                  <form action="Booking.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="StartDateTime" id="StartDateTime" value="<?php echo $show['StartDateTime'];?>"  hidden>
                  <input type="text" name="movieID" id="movieID" value="<?php echo $mID; ?>"  hidden>
                  <input type="text" name="roomID" id="roomID" value="<?php echo $show['SeatID']; ?>"  hidden>

                  <input type="submit" name="bookSeat" class="btn-warning rounded-3 form-control" value="<?php echo $dataTime; ?>">
                  </form>
                </div>
                <?php
                  }}
                  else{
                ?>
                    <div class="row d-flex justify-content-center"><h5>Coming Soon...</h5></div>
                <?php 
                  }
                ?>

              </div>

            </div>
          </div>
        </div>
      
      
    </main>
    
        
<?php } ?>

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