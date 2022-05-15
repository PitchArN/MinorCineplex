<?php
	include '../sql/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Analysis</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "../popcron/tien_style.css" rel="stylesheet"/> 

</head>
<body>

	<div class="container bg-light ">
<nav>
<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
			<h1>Advance Analysis Report</h1>
</div>
</nav>
<nav>
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
  	<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
    	<div class="p-1 d-flex justify-content-center">
					<img class="align-self-center mr-3" src="https://cdn-icons-png.flaticon.com/512/813/813670.png" width="50" height="50"><br>
					<h4 class="align-self-center">Home</h4>
					
		</div>
    </button>
    <button class="nav-link" id="nav-ticket-tab" data-bs-toggle="tab" data-bs-target="#nav-ticket" type="button" role="tab" aria-controls="nav-ticket" aria-selected="false">
    	<div class="p-1 d-flex justify-content-center">
					
					<img class="align-self-center mr-3" src="https://cdn-icons-png.flaticon.com/512/3702/3702886.png" width="50" height="50"><h4>Ticket<br>Sales</h4>
		</div>
    </button>

    <button class="nav-link" id="nav-genre-tab" data-bs-toggle="tab" data-bs-target="#nav-genre" type="button" role="tab" aria-controls="nav-genre" aria-selected="false">
    	<div class="p-1 d-flex justify-content-center">
					
					<img class="align-self-center mr-3" src="https://cdn-icons-png.flaticon.com/512/860/860306.png" width="50" height="50"><h4>Movie<br>Genre</h4>
		</div>
    </button>


    <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab" data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product" aria-selected="false">
    	<div class="p-1 d-flex justify-content-center">
					
					<img class="align-self-center mr-3" src="https://cdn-icons-png.flaticon.com/512/3507/3507076.png" width="50" height="50"><h4>Product<br>Sales</h4>
				</div>
    </button>
    <button class="nav-link" id="nav-staff-tab" data-bs-toggle="tab" data-bs-target="#nav-staff" type="button" role="tab" aria-controls="nav-staff" aria-selected="false">
    	<div class="p-1 d-flex justify-content-center">
					
					<img class="align-self-center mr-3" src="https://cdn-icons.flaticon.com/png/512/2294/premium/2294104.png?token=exp=1652640270~hmac=5a84a27eaca6bbd5babda1ea7da9705e" width="50" height="50"><h4>Staff<br>Works</h4>
				</div>
    </button>


    <button class="nav-link" id="nav-promotion-tab" data-bs-toggle="tab" data-bs-target="#nav-promotion" type="button" role="tab" aria-controls="nav-promotion" aria-selected="false">
		<div class="p-1 d-flex justify-content-center">
					
					<img class="align-self-center mr-3" src="https://cdn-icons-png.flaticon.com/512/3759/3759768.png" width="50" height="50"><h4>Promotion<br>Usage</h4>
				</div>
    </button>


  </div>
</nav>


<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  	<div class="p-3">
  	<br>
  <h4><b>This page shows advanced analysis of the Project</b><br></h4>

<b>Ticket Sales :</b> <br>
This is a summary of movie ticket sales by ranking.<br> 
Use data from <b>movie seat4room</b> and <b>movietime</b> 
<br><br>
<b>Movie Genre :</b><br>
It sums up the types of movies that have the highest number of movie ticket buyers. <br>
Use data from <b>movie moviegenre seat4room</b> and <b>movietime</b>
<br><br>
<b>Product Sale : </b><br>
Sales of each product and popular products. <br>
Use data from <b>itemstock itemorder</b> and <b>member</b>
<br><br>
<b>Staff work : </b> <br>
Show all staff work and staff time. <br>
Use data from <b>staff staffcheck ticketorder</b> and <b>itemorder</b>
<br><br>
<b>Promotion Usage : </b><br>
Total Usage of each promotion.<br>
Use data from <b>promotion ticketorder</b> and <b>itemorder</b>
<br><br>	
	</div>
</div>
  <div class="tab-pane fade" id="nav-ticket" role="tabpanel" aria-labelledby="nav-ticket-tab">
  <table  class="table">
  	<thead>
  <tr>
    <th scope="col">MovieID</th>
    <th scope="col">Movie Name</th>
    <th scope="col">Genre</th>
    <th scope="col">Lenght</th>
    <th scope="col">Rate Ages</th>

    <th scope="col">Rating</th>
    <th scope="col">Total Movie Showtime</th>
    <th scope="col">TicketSales</th>
  </tr>
</thead>
<tbody>
	<?php
		$movie = "SELECT m.MovieID AS MovieID,m.RateAges AS RateAges,m.Rating AS Rating,m.Length AS Length,m.MovieName AS MovieName,COUNT(showtime.StartDateTime) AS TotalShowtime FROM
		(SELECT StartDateTime,MovieID,SeatID FROM movietime)AS showtime, movie m
		WHERE m.MovieID = showtime.MovieID
		GROUP BY m.MovieID  ORDER BY TotalShowtime  DESC";
		$movieQuery = mysqli_query($connect,$movie);
		while ($m = mysqli_fetch_assoc($movieQuery)) {	
	?>
	<tr>
	<th scope="row"><!--- MovieID  --->
			<?php echo $m['MovieID'];	?>
	</th>
	<td><?php echo $m['MovieName'];	?></td>		<!--- MovieName  --->
	<td><?php
		$movieID = $m['MovieID'];
		$genreFind = "SELECT Genre FROM moviegenre WHERE MovieID='$movieID'";
		$genreQuery = mysqli_query($connect,$genreFind);
		while($g = mysqli_fetch_assoc($genreQuery)){
			echo $g['Genre']."<br>";
		}
		?></td><!--- MovieGenre --->
	<td><?php echo $m['Length'];	?></td>		<!--- MovieLenght --->
	<td><?php echo $m['RateAges'];	?></td><!--- MovieRateAge --->
	<td><?php echo $m['Rating'];	?></td><!--- MovieRating  --->
	<td><?php echo $m['TotalShowtime'];?></td><!--- Count(movieTime)  --->
	
	<td><?php
	
		$countSales = "SELECT COUNT(*)AS sales FROM seat4room WHERE MovieID = '$movieID' AND SeatStatus = 1";
		$countSalesQuery = mysqli_query($connect,$countSales);
		//print_r(mysqli_fetch_assoc($countShowtimeQuery));
		$countS = mysqli_fetch_assoc($countSalesQuery);
		echo $countS['sales'];

		?></td><!--- Count(ticketorder  --->
    </tr>
    <?php
		}
    ?>
</tbody>
</table>
</div>
  <div class="tab-pane fade" id="nav-genre" role="tabpanel" aria-labelledby="nav-genre-tab">

  <table  class="table">
  	<thead>
  <tr>
    <th scope="col">Genre</th>
    <th scope="col">Genre Ticket Sales</th>
    <th scope="col">Total Showtime</th>
    <th scope="col">Movie Count</th>

    <th scope="col">Most Sales Movie</th>
    <th scope="col">Sales</th>
    <th scope="col">Showtime</th>
  </tr>
</thead>
<tbody>
	<?php 
		$genre = "SELECT mg.Genre AS Genre,COUNT(showtime.StartDateTime) AS TotalShowtime
		FROM(SELECT StartDateTime,MovieID FROM movietime)AS showtime, moviegenre mg
		WHERE mg.MovieID = showtime.MovieID
		GROUP BY mg.Genre
		ORDER BY TotalShowtime  DESC";
		$genreQuery = mysqli_query($connect,$genre);
		while($g = mysqli_fetch_assoc($genreQuery)){

	?>
	<tr>
		<th>
			<?php echo $g['Genre']; ?>
		</th>

		<td>
			<?php 
				$thisGenre = $g['Genre'];
				$genreSale = "SELECT COUNT(SeatID)AS SeatCount FROM seat4room s4 INNER JOIN moviegenre mg ON mg.MovieID=s4.MovieID WHERE Genre = '$thisGenre' AND SeatStatus = 1";
				$genreSaleQuery = mysqli_query($connect,$genreSale);
				$genSale = mysqli_fetch_assoc($genreSaleQuery);
				echo $genSale['SeatCount'];
			?>
		</td>
		<td>
			<?php echo $g['TotalShowtime']; ?>
		</td>
		<td>
			<?php
			 	 $genreMovie = "SELECT COUNT(MovieID)AS movieCount FROM  moviegenre WHERE Genre = '$thisGenre'";
			 	 $genreMovieQuery = mysqli_query($connect,$genreMovie);
			 	 $genreMovieCount = mysqli_fetch_assoc($genreMovieQuery);
			 	 echo $genreMovieCount['movieCount'];
			?>
		</td>
		<td>
			<?php 
				$genreMostSale = "SELECT RoomMovie.MovieID AS MovieID, MAX(RoomMovie.SeatCount)AS MaxGenre ,Genre
FROM (SELECT MovieID,COUNT(SeatID) AS SeatCount FROM seat4room  WHERE SeatStatus = 1 GROUP BY MovieID) AS RoomMovie INNER JOIN moviegenre ON moviegenre.MovieID = RoomMovie.MovieID
WHERE Genre = '$thisGenre'";
				$genreMostQuery = mysqli_query($connect,$genreMostSale);
				$genMost = mysqli_fetch_assoc($genreMostQuery);
				
				$mostID = $genMost['MovieID'];
				$countShowTime = "SELECT MovieName, COUNT(mov.StartDateTime) AS showCount
FROM (SELECT MovieID,StartDateTime FROM movietime WHERE MovieID = '$mostID')AS mov INNER JOIN movie ON movie.MovieID = mov.MovieID";
				$mostIDQuery = mysqli_query($connect,$countShowTime);
				$most = mysqli_fetch_assoc($mostIDQuery);
				echo $mostID." : ".$most['MovieName'];
			?>
		</td>
		<td><?php
			echo $genMost['MaxGenre'];
		?></td>
		<td>
			<?php
			echo $most['showCount'];				
			?>
		</td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</div>
  <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
  	<table  class="table">
  	<thead>
  <tr>
    <th scope="col">itemID</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Type</th>
    <th scope="col">Sales</th>

    <th scope="col">Total Amount</th>
    <th scope="col">Price</th>
    <th scope="col">Most Buying Member Type</th>
  </tr>
</thead>
<tbody>
	<?php 
		$productList = "SELECT * FROM itemstock ORDER BY ProductType DESC";
		$productListQuery = mysqli_query($connect,$productList);
		while($product = mysqli_fetch_assoc($productListQuery)){
			$thisProduct = $product['ItemID'];

			//--------------------- FIND Quantity
			$saleCount = "SELECT SUM(Quantity) AS itemSold FROM itemorder WHERE ItemID = '$thisProduct'";
			$saleCountQuery = mysqli_query($connect,$saleCount);
			$soldAmount = mysqli_fetch_assoc($saleCountQuery);


			//--------------------- FIND Membertype
			$memberCount = "SELECT MAX(mostMemType.itemSold) AS MaxSoldMemType,mostMemType.MemberType AS MemType
FROM (SELECT SUM(Quantity) AS itemSold,MemberType
FROM itemorder INNER JOIN member ON member.MemberID = itemorder.MemberID 
WHERE ItemID = '$thisProduct' GROUP BY MemberType) AS mostMemType";
			$memberCountQuery = mysqli_query($connect,$memberCount);
			$mostMember = mysqli_fetch_assoc($memberCountQuery);
	?>
	<tr>
		<th>
			<?php echo $thisProduct; ?>
		</th>
		<td>
			<?php echo $product['ItemName'];?>
		</td>
		<td>
			<?php echo $product['ProductType'];?>
		</td>
		<td><?php echo ($product['Price']*$soldAmount['itemSold']);?></td>
		<td><?php echo $soldAmount['itemSold']; ?></td>
		<td><?php echo $product['Price'];?></td>
		<td><?php echo $mostMember['MemType'];?></td>
	</tr>
	<?php
}
	?>
</tbody>
</table>

</div>
  <div class="tab-pane fade" id="nav-staff" role="tabpanel" aria-labelledby="nav-staff-tab">
<table  class="table">
  	<thead>

  <tr>
    <th scope="col">Staff ID</th>
    <th scope="col">Staff Name</th>
    <th scope="col">Staff Type</th>
    <th scope="col">CheckCount</th>
    <th scope="col">Late</th>

    <th scope="col">Sales Order Count</th>
    <th scope="col">Salary</th>
    <th scope="col">Staff Mail</th>
  </tr>
 
</thead>
<tbody>
	<?php
	$listStaff = "SELECT * FROM staff ORDER BY StaffType";
	$listStaffQuery = mysqli_query($connect,$listStaff);
	while ($aStaff = mysqli_fetch_assoc($listStaffQuery)) {
		$thisStaff = $aStaff['StaffID'];
		$staffOntime = "SELECT COUNT(ontime.ontime) AS OntimeCount FROM
(SELECT * FROM staffcheck WHERE StaffID = '$thisStaff' AND ontime = 1) AS ontime";
		$staffOntimeQuery = mysqli_query($connect,$staffOntime);
		$ontimeCount = mysqli_fetch_assoc($staffOntimeQuery);

		$staffAlltime = "SELECT COUNT(ontime.ontime) AS AlltimeCount FROM
(SELECT * FROM staffcheck WHERE StaffID = '$thisStaff') AS ontime";
		$staffAlltimeQuery = mysqli_query($connect,$staffAlltime);
		$AlltimeCount = mysqli_fetch_assoc($staffAlltimeQuery);
?>

	<tr>
		<th>
			<?php echo $aStaff['StaffID']; ?>
		</th>
		<td><?php echo $aStaff['StaffName']; ?></td>
		<td><?php echo $aStaff['StaffType']; ?></td>
		<td><?php echo $AlltimeCount['AlltimeCount'];?></td>
		<td><?php echo ($AlltimeCount['AlltimeCount'] - $ontimeCount['OntimeCount']);?></td>			
		<td>
			<?php
				//----------- COUNT TICKET SALES ORDER
				$staffTicketSale = "SELECT COUNT(tickOrder.TicketOrderID) AS SaleCount
FROM (SELECT * FROM ticket_order WHERE StaffID = '$thisStaff' GROUP BY TicketOrderID) AS tickOrder";
				$staffTicketSaleQuery = mysqli_query($connect,$staffTicketSale);
				$ticketSale = mysqli_fetch_assoc($staffTicketSaleQuery);

				//----------- COUNT ITEM SALES ORDER
				$staffItemSale = "SELECT COUNT(tickOrder.OrderID) AS SaleCount
FROM (SELECT * FROM itemorder WHERE StaffID = '$thisStaff' GROUP BY OrderID) AS tickOrder";
				$staffItemSaleQuery = mysqli_query($connect,$staffItemSale);
				$itemSale = mysqli_fetch_assoc($staffItemSaleQuery);
			
				echo ($ticketSale['SaleCount']+$itemSale['SaleCount']);
			?>
		</td>
		<td><?php echo $aStaff['StaffSalary']; ?></td>
		<td><?php echo $aStaff['StaffMail']; ?></td>
	</tr>
<?php 
	} 
 ?>
</tbody>
</table>
</div>
  <div class="tab-pane fade" id="nav-promotion" role="tabpanel" aria-labelledby="nav-promotion-tab">
<table  class="table">
  	<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Detail</th>
    <th scope="col">Type(Calculate)</th>

    <th scope="col">Condition</th>
    <th scope="col">Start Date</th>
    <th scope="col">End Date</th>
    <th scope="col">Total Use</th>
    <th scope="col">Ticket Use</th>
    <th scope="col">Product Use</th>
  </tr>
</thead>
<tbody>
	<?php 
		$proFind = "SELECT p.ProID AS ProID,p.ProName AS ProName,p.Prodetails AS ProDetails,p.Protype AS Protype,p.ProCondition AS ProCon,p.ProStartDate AS ProStart,p.ProEndDate AS ProEnd,COUNT(ito.Quantity)AS UseProduct
FROM promotion p
INNER JOIN itemstock it ON p.ProID=it.ProID INNER JOIN itemorder ito ON it.ItemID=ito.ItemID
GROUP BY p.ProID";
		$proQuery = mysqli_query($connect,$proFind);
		while($pro = mysqli_fetch_assoc($proQuery)){
			$thisPro = $pro['ProID'];
			$ticketPro = "SELECT COUNT(ito.TicketProductID)AS TicketUsed
FROM ticketproduct ito WHERE ProID= '$thisPro'";
			$ticketProQuery = mysqli_query($connect,$ticketPro);
			$ticketProResult = mysqli_fetch_assoc($ticketProQuery);
	?>
	<tr>
		<th>
			<?php echo $thisPro; ?>
		</th>
		<td>
			<?php echo $pro['ProName']; ?>
		</td>
		<td><?php echo $pro['ProDetails']; ?></td>
		<td><?php echo $pro['Protype']; ?></td>
		<td><?php echo $pro['ProCon']; ?></td>
		<td><?php echo date("Y-M-d H:i:s",strtotime($pro['ProStart'])); ?></td>
		<td><?php echo date("Y-M-d H:i:s",strtotime($pro['ProStart'])); ?></td>
		<td><?php echo ($ticketProResult['TicketUsed']+$pro['UseProduct']);?></td>
		<td><?php echo $ticketProResult['TicketUsed'];?></td>
		<td><?php echo $pro['UseProduct']; ?></td>
	</tr>
<?php
	}
?>
</tbody>
</table>
</div>
</div>


</div>




</body>
