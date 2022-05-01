<?php 
  include 'connect.php';
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
        background-image: url('WebsiteBG.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

    </style>
    
    
</head>
<body data-new-gr-c-s-check-loaded="14.1057.0" data-gr-ext-installed="" class="vsc-initialized">
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
          <a href="Home.php" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Movie Detail</span>
          </a>
        </header>
        </div>
        
        <div class="row">
          <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
              <div class="row">
                <div class="col">
                    <img src = "<?php echo $moviePoster ?>" alt = "<?php echo $movieName; ?>" width="30%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                    <h1 class="display-5 fw-bold"  ><?php echo $movieName; ?></h1>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <iframe width="560" height="315"  src="<?php echo $movieTrailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>>
                    </iframe>
                </div>
                <div class="col">
                    <p class="col-md-8 fs-4" ><?php echo $movieDes; ?></p>
                </div>
              </div>
              <div class="row">
                  <a href= "Booking.php" > <button class="btn btn-primary btn-lg" type="button">Buy</button></a>
              </div>

            </div>
          </div>
        </div>
          <footer class="pt-3 mt-4 text-muted border-top">
          </footer>
      </div>
    </main>
    
    
        
      
    
<?php } ?>
</body>
</html>