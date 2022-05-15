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
    <br><br>

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

    </body>

</html>