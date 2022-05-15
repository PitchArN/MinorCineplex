<?php
  include '../sql/connect.php';
  session_start();
  if(isset($_SESSION['memberID'])){
    $memberID = $_SESSION['memberID'];
  }else{
    $memberID = 0;
  }
  if(isset($_SESSION['staffID'])){
    $staffID =$_SESSION['memberID'];
    $staffRole = $_SESSION['role'];
  }else{
    $staffID = 0;
  }
?>
<html>
    <head>
    <title>MinorCineplex | PointPromotion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="StyleTest2.css">
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
</nav><center>
    <div class ="ProFM1">
        <div class="Detail">
        <h3>100 point for popcorn free</h3>
        <h4>
       ป๊อปคอนรสเกลือเพียงแค่ 100 แต้มก็แลกได้</br>
        เงื่อนไขเป็นไปตามที่บริษัทกำหนด</br></h4></br>
        <h4>
        Point Need : <?php
							$sql = "SELECT Price FROM itemstock WHERE ItemID = 2";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							$price = $row[0];
							echo $row[0];
						?>
		</br>
        Point Have : <?php
							$sql = "SELECT MemberPoint FROM Member WHERE MemberID = $memberID";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							$point = $row[0];
							echo $row[0];
						?>
         <br>
         </h4><br>
        <?php
			if($point < $price){
				$dis = "disabled";
			}
			else{
				$dis = '';
			}
		?>
			<form action = "donePoint.php" method = "post" enctype = "multipart/form-data">
			<input type = "submit" name = "Purchase" class = "btn-3" value = "Purchase" <?php echo $dis; ?>>
			</form>
    </div>
    </div></center>
</body>