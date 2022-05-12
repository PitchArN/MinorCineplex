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

        $proID = mysqli_real_escape_string($connect,$_POST['ticketPromotion']);
         
        $seats = mysqli_real_escape_string($connect,$_POST['seats']);
        //create Array of seat
        $seatList = explode(',',$seats);

        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $StartDateTime = mysqli_real_escape_string($connect,$_POST['StartDateTime']);

        $howManyInTicketProduct= "SELECT TicketProductID FROM ticketproduct";
        $ticketProductQuery= mysqli_query($connect,$howManyInTicketProduct);
        $ticketProductID = mysqli_num_rows($ticketProductQuery);
        //--------------------------------------- Query All Data to ticketproduct -------
        foreach($seatList as $s){
          if($s!=""){
            //echo $s."<br>";
            $insertTicketProduct = "INSERT INTO ticketproduct(TicketProductID,SeatID,ProID,StartDateTime) VALUES('$ticketProductID','$s','$proID','$StartDateTime')";
            $insertTicketProductQuery = mysqli_query($connect,$insertTicketProduct);
            
            //------------------------- Update seat4room
            $startDateTime = date("Y-m-d h:i:s",strtotime($StartDateTime));
            //$startDateTime = strtotime($StartDateTime);
            $updateSeat = "UPDATE seat4room SET SeatStatus = 1 WHERE (SeatID = '$s'AND MovieID = '$movieID' AND StartDateTime = '$startDateTime' )";
            $updateSeatQuery = mysqli_query($connect,$updateSeat);

            $ticketProductID++;
          }
        }


      }
    ?>
    <div class="container">
      <div class="row  d-flex justify-content-center">
      <h1>
        Ticket Purchased, Thank You <?php echo $startDateTime; ?>
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