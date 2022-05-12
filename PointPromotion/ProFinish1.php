<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="StyleCopy.scss">
</head>
    </html>
    <body>
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
        <h2>Promotion :
        </h2>
        <p> 
            มา 3 จ่าย 2</br>
            (โปรอย่าเผลอแดกทองเข้าไป)</br></br>
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
								$c = 0;
								$sum = 0;
								while($c <= 2){
									$sql = "SELECT ItemName, Price FROM itemstock WHERE ItemID = $c";
									$result = mysqli_query($connect,$sql) or die("Bad query");
									$row = mysqli_fetch_row($result);
									$total = $row[1]*$POP[$c];
									$sum = $sum + $total;
							?>
							<tr class="service">
								<td class="tableitem"><p class="itemtext"><?php echo $row[0]; ?></p></td>
								<td class="tableitem"><p class="itemtext"><?php echo $POP[$c]; ?></p></td>
								<td class="tableitem"><p class="itemtext"><?php echo $total; ?></p></td>
							</tr>
							<?php
								$c++;
								}
							?>
							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>tax</h2></td>
								<td class="payment"><h2>$419.25</h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2><?php echo $sum; ?></h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong><a class="button" href="../Home/Home1.php">ชำระเสร็จสิ้น</a></strong>   
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  </center>
</body>