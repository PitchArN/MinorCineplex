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

	if(empty($_POST['Sweet']) && empty($_POST['Salty']) && empty($_POST['BBQ'])){
		$_SESSION['empty'] = 1;
		header('Location:BuyPop.php');
	}
	$POP = array($_POST['Sweet'], $_POST['Salty'], $_POST['BBQ']);
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
<div class="container bg">
        <center>
            <h1>Cart</h1>
        </center>
               
        <div class="row">

                <div class="form-group">
                <p>Promotion</p>
                <form action = "Bill.php" method = "post" enctype = "multipart/form-data">
				<input type = "hidden" name = "Sweet" value = "<?php echo $POP[0]; ?>">
				<input type = "hidden" name = "Salty" value = "<?php echo $POP[1]; ?>">
				<input type = "hidden" name = "BBQ" value = "<?php echo $POP[2]; ?>">
				<?php
					$c = 1;
					while($c <= 3){
						if($POP[$c-1] > 0){
							$sql = "SELECT i.ProID, p.ProName, i.ItemName FROM itemstock i, promotion p WHERE i.ItemID = $c AND i.ProID = p.ProID;";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							if($row[0] > 1){
								if($row[0] != 2){
									echo $row[2];
				?>
                <br>
				<input type="checkbox" id="SendPro<?php echo "$c";?>" name="Pro<?php echo "$c";?>" value="<?php echo $row[0];?>">
				<label class="form-label btn-warning rounded-3" for="SendPro<?php echo "$c";?>"><?php echo $row[1]?></label><br>
				<?php
								}
								else{
									if($POP[1] > 2){
										echo $row[2];
				?>
                <br>
				<input type="checkbox" id="SendPro<?php echo "$c";?>" name="Pro<?php echo "$c";?>" value="<?php echo $row[0];?>">
				<label class="form-lebel btn-warning rounded-3" for="SendPro<?php echo "$c";?>"><?php echo $row[1]?></label><br>
				<?php
									}
								}
							}
						}
						$c++;
					}
				?>
                <br><input type = "submit" name = "Purchase" class = "btn-2" value = "Purchase">
				</form>
            </div>

        </div>
    </div>
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
