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

	/* if(!empty($_POST['Pro2']))
		echo $_POST['Pro2']; */
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
<style type="text/css">
        .btn-2{
    width: 80px;
    height: 30px;
    border: none;
    background-color: rgb(255, 255, 255);
    border-radius: 4px;
    box-shadow: inset 0 0 0 0 #f77a37 ;
    transition: ease-out 0.3s;
    outline :none;
}
.btn-2:hover{
    box-shadow: inset 150px 0 0 0 #f77a37  ;
    cursor: pointer;
}
    </style>

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
<br><br>
<div class="container bg">
  <br><br>
        <center>
            <h1>Cart</h1>
        </center>
<br>

        <center>

            
                <h2>Purchase Method</h2>
                <button class="btn-2" disabled>Wallet</button>
                <button class="btn-2" disabled>Shopee</button>
                <button class="btn-2" disabled>Prompay</button>
            <br><br>
        <form action = "Bill-con.php" method = "post" enctype = "multipart/form-data">
				<input type = "hidden" name = "Sweet" value = "<?php echo $_POST['Sweet']; ?>">
				<input type = "hidden" name = "Salty" value = "<?php echo $_POST['Salty']; ?>">
				<input type = "hidden" name = "BBQ" value = "<?php echo $_POST['BBQ']; ?>">
				<?php
					$c = 1;
					while($c <= 3){
						if(!empty($_POST['Pro'.$c])){
				?>
				<input type = "hidden" name = "Pro<?php echo $c;?>" value = "<?php echo $_POST['Pro'.$c]; ?>">
				<?php
						}
						$c++;
					}
				?>
                <input type = "submit" class="btn-2" name = "ConfirmBut" value = "Confirm">
		</form>
<!-- Contact -->
</center>
<br><br>
<div class="d-flex justify-content-between py-4 my-4 border-top">
      <p><center>© 2022 Minor Cineplex</center></p>
    </div><br><br>
</div>

<style> .bg{
    background: rgba(0,0,0,0.6);
    color: white;
} 
</style>


    </body></html>
