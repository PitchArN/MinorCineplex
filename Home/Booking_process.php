<?php 
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MinorCineplex | Seat Booking</title>
  </head>

  <body>
<div class="container">
<?php
  if(isset($_POST['ConfirmBookSeat'])){
    $seats = mysqli_real_escape_string($connect,$_POST['SeatSelected']);
    //create Array of seat
    $seatList = explode(',',$seats);

    $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
    $StartDateTime = mysqli_real_escape_string($connect,$_POST['StartDateTime']);
?>
<div class="row">
  <div class="col">
<h1>
    <?php
      $findMovieName = "SELECT * FROM movie WHERE MovieID = '$movieID'";
      $movieNameQuery = mysqli_query($connect,$findMovieName);
      $movie = mysqli_fetch_assoc($movieNameQuery);
      echo $movie['MovieName'];
    ?>
    </h1>
  </div>
  <div class="col">
    <h5>
      <?php
        $totalPrice = 0;
        foreach($seatList as $s){
          if($s!=""){
            echo $s."<br>";
            $priceSearch = "SELECT Price FROM seat4room WHERE SeatID = '$s'";
            $priceQuery = mysqli_query($connect,$priceSearch);
            $price = mysqli_fetch_assoc($priceQuery);
            $totalPrice += $price['Price'];
          }
        }
      ?>
    </h5>
  </div>

</div>
  <div class="row">
    <?php
      $seatCount = count($seatList) - 1; 
      echo $seatCount." seat(s)"; ?>
  </div>
  <form action="payTicket.php" enctype="multipart/form-data" method="post">
  <div class="row">
      <input type="hidden" name="movieID" value="<?php echo $movieID ?>">
      <input type="hidden" name="seats" value="<?php echo $seats ?>">
      <input type="hidden" name="StartDateTime" value="<?php echo $StartDateTime ?>">
      <label for="ticketPromotion">Promotion Code</label>
      <input type="text" name="ticketPromotion">
  </div>
  <div class="row">
      <label for="confirmTicketOrder">
        <?php echo $totalPrice."  ฿"; ?>
          
      </label>
      <input type="submit" name="confirmTicketOrder" class="btn-warning rounded-3" value="Confirm">

  </div>
  </form>
</div>
<?php
  }

?>


  </body>