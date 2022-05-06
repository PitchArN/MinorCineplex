<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Bookingstyle.css" />
    <title>MinorCineplex | Seat Booking</title>
  </head>
  
  <body>
<?php 
  include 'connect.php';

  if(isset($_POST['ConfirmBookSeat'])){
    $seats = mysqli_real_escape_string($connect,$_POST['SeatSelected']);
    $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
    $StartDateTime = mysqli_real_escape_string($connect,$_POST['StartDateTime']);
?>
    <form action="payTicket.php" enctype="multipart/form-data" method="post">
      

    </form>
<?php
  }

?>


  </body>