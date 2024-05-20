<?php

  include '../sql/connect.php';

  function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}
  session_start();
  $memberID = isset($_SESSION['memberID']) ? $_SESSION['memberID'] : 0;
$staffID = isset($_SESSION['staffID']) ? $_SESSION['staffID'] : 0;
$staffRole = isset($_SESSION['role']) ? $_SESSION['role'] : '';

  

	$POP = array(
    isset($_POST['Sweet']) ? $_POST['Sweet'] : 0,
    isset($_POST['Salty']) ? $_POST['Salty'] : 0,
    isset($_POST['BBQ']) ? $_POST['BBQ'] : 0
  );

  if ($memberID < 0 || $staffID < 0) {
    // Handle invalid session IDs
    die("Invalid session IDs");
}

// Prevent path traversal by restricting access to specific directories
if (!preg_match('/^[a-zA-Z0-9\/]+$/', $memberID) || !preg_match('/^[a-zA-Z0-9\/]+$/', $staffID)) {
    // Handle invalid paths
    die("Invalid file paths");
}
?>
<html>
    <head>
        <title>MinorCineplex | Popcorn</title>
        <link rel="stylesheet" href="tien_style.scss">
        <!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
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
<form action = "Donesql.php" method = "post" enctype = "multipart/form-data">
    <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
 
        <h2 class="d-flex justify-content-center py-4 my-4 border-top border-bottom">
        <center>RECEIPT</center>
      </h2>

      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    <center>
    <div id="mid">
      <div class="info">
        <h2 class="d-flex justify-content-center py-4 my-4 border-bottom">Promotion
        </h2>
        <p class="d-flex justify-content-center py-4 my-4 border-top border-bottom"> 
            <?php
					$c = 1;
					while($c <= 3){
						if(!empty($_POST['Pro'.$c])){
							$sql = "SELECT i.ProID, p.ProName, i.ItemName FROM itemstock i, promotion p WHERE i.ItemID = $c AND i.ProID = p.ProID;";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							if($row[0] > 1){
								echo $row[2]."    ".$row[1];
								echo "<br>";
							}
						}
						$c++;
					}
				?>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    <div id="bot">

					<div id="table border">
						<table>
							<tr class="tabletitle">
								<th class="border-bottom border-Left">Item</th>
								<th class="border-bottom border-Left">Qty</th>
								<th class="border-bottom border-Left">Total</th>
							</tr>
							<?php
								$c = 1;
								$sum = 0;
								$discount = 0;
								while($c <= 3){
									if($POP[$c-1] > 0){
									$sql = "SELECT ItemName, Price FROM itemstock WHERE ItemID = $c";
									$result = mysqli_query($connect,$sql) or die("Bad query");
									$row = mysqli_fetch_row($result);
									$price = $row[1]*$POP[$c-1];
									if(!empty($_POST['Pro'.$c])){
										if($_POST['Pro'.$c] == 2)
											$discount += ($row[1]*10/100)*$POP[$c-1];
										else if($_POST['Pro'.$c] == 3)
											$discount += ($row[1]*10/100)*$POP[$c-1];
									}
									$sum += $price;
							?>
							<tr class="service">
								<th class=""><?php echo $row[0]; ?></th>
								<td class="border-Left"><?php echo $POP[$c-1]; ?></td>
								<td class="border-Left"><?php echo $price; ?></td>
							</tr>
							<?php
									}
								$c++;
								}
							?>
							<tr><td><p class="d-flex justify-content-center py-4 my-4"></p></td></tr>
							<tr class="tabletitle">
								<td></td>
								<th class="Rate">Sum</th>
								<td class="payment"><?php echo $sum; ?></td>
							</tr>
							
							<tr class="tabletitle">
								<td></td>
								<th class="Rate">Discount</th>
								<td class="payment"><?php echo $discount; ?></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<th class="Rate">Total</th>
								<th class="payment"><?php echo $sum-$discount; ?></th>
							</tr>
						</table>
						<br><br>
					</div><!--End Table-->
					<input type = "hidden" name = "Sweet" value = "<?php echo $POP[0]; ?>">
					<input type = "hidden" name = "Salty" value = "<?php echo $POP[1]; ?>">
					<input type = "hidden" name = "BBQ" value = "<?php echo $POP[2]; ?>">
					<div id="legalcopy">
						<input type = "submit" name = "Finish" class = "btn-2" value = "Done">
					</div>

				</div><!--End InvoiceBot-->
			</div><!--End Invoice-->
  </form>
  </center>

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