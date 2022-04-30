<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
      <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Minor Cineplex
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
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
    background-image: url('WebsiteBG.jpg');
}</style>

<div class="album py-5 bg-light">
    <div class="container" >
      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-1">

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="80%" height="300"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                <a href= "Detail.php" >
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div></a>  
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/movie-poster-template-design-21a1c803fe4ff4b858de24f5c91ec57f_screen.jpg?ts=1636996180" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB7oBgplHfThaPJZez54mthbD3hNqr08igpQ&usqp=CAU" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://i0.wp.com/bloody-disgusting.com/wp-content/uploads/2019/02/jordan-peele-us-poster.jpg?ssl=1" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://www.u-buy.jp/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzF1VUhwOWEzYkwuX0FDX1NMMTAwMF8uanBn.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class ="image">
              <div class = "image__img"> 
                <img src = "https://s.onlineoops.com/upload3/2/20190621/0bcd6398af08473d060d36352ce2035f.jpg" alt = "X-MEN" width="100%" height="450"><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  <div class="image__overlay">
                    <div class="image__title">X-MEN</div>
                      <p class="image__description">
                       X-MEN DARK POENIX
                      </p>
                  </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
  ...
</div>

  
</body>
</html>