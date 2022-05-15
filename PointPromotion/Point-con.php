<?php
	include 'D:\connect.php';
	$POP = array($_POST['Sweet'], $_POST['Salty'], $_POST['BBQ']);
?>
<html>
    <head>
        <title>MinorCineplex | PointPromotion</title>
        <link rel="stylesheet" href="../Popcron/tien_style.scss">
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

    <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
          ******************************</br>
        <h2>RECEIPT</h2>
        ******************************</br>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    <center>
    <div id="mid">
      <div class="info">
       
        <p> 
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

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Total</h2></td>
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
								<td class="tableitem"><p class="itemtext"><?php echo $row[0]; ?></p></td>
								<td class="tableitem"><p class="itemtext"><?php echo $POP[$c-1]; ?></p></td>
								<td class="tableitem"><p class="itemtext"><?php echo $price; ?></p></td>
							</tr>
							<?php
									}
								$c++;
								}
							?>
							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Sum</h2></td>
								<td class="payment"><h2><?php echo $sum; ?></h2></td>
							</tr>
							
							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>discount</h2></td>
								<td class="payment"><h2><?php echo $discount; ?></h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2><?php echo $sum-$discount; ?></h2></td>
							</tr>

						</table>
					</div><!--End Table-->
					
					<div id="legalcopy">
						<p class="legal"><strong><a class="button" href="../Popcron/Done.php">ชำระเสร็จสิ้น</a></strong>   
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  </center>

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
      <p class="text-muted">© 2022</p>
    </div>

    <div class="col">

    </div>

    <div class="col" >
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2022 Minor Cineplex</p>
    </div>
  </footer>
  </div>
</div>
    </body>

</html>