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
    <?php 
      if(isset($_POST['confirmTicketOrder'])){
        
      }
    ?>
    <div class="container">
      <div class="row  d-flex justify-content-center">
      <h1>
        Ticket Purchased, Thank You
      </h1>
    </div>
    <div class="row  d-flex justify-content-center">
      <label>CONFIRMATION CODE:</label>
      <input type="texr" name="" readonly value="************************">
    </div>
    <div class="row  d-flex justify-content-center">
      <h3>Use this confirmation code at the Cinema</h3>
    </div>
    </div>
    
  </body>