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
        foreach($seatList as $s){
          echo $s."<br>";
        }
      ?>
    </h5>
  </div>

</div>
  <div class="row">
    <?php echo count($seatList)." seat(s)"; ?>
  </div>
  <form action="payTicket.php" enctype="multipart/form-data" method="post">
  <div class="row">
    
      <input type="text" name="ticketPromotion">
  </div>
  <div class="row">
      <?php echo "... ฿"; ?>
      <input type="submit" name="confirmTicketOrder" class="btn-warning rounded-3">
    
  </div>
  </form>
</div>
<?php
  }

?>


  </body>