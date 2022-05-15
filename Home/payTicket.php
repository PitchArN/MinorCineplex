<?php 
  include '../sql/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href = "Booking_process.css" rel="stylesheet"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!---------- Boothstrap ------->
    
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MinorCineplex | Seat Booking</title>
  </head>

  <body>
  <div class = "wrapper" align = "center">
  <div id = "modalbox" class="modal">
  <div class = "modalcontent">  
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
        //--------------------------------------- Query Data to ticket_Order
        $dateTime = date("y-m-d h:i:s",strtotime("now"));
        $ticketOrderID = strtotime("now");


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

            //-------------------------- Insert Into Ticket Order
            $insertTicketOrder = "INSERT INTO ticket_order(TicketOrderID,TimeDate,TicketProductID,MemberID,StaffID,PurchaseType) VALUES('$ticketOrderID','$dateTime','$ticketProductID',0,0,'Online')";
            $insertTicketOrderQuery = mysqli_query($connect,$insertTicketOrder);


            $ticketProductID++;
          }
        }


      }
    ?>
    
    <div class="container">
      <div class="row-2  d-flex justify-content-center">
      <h1>
        Ticket Purchased, Thank You
      </h1><br>
    </div>
    <div class="row  d-flex justify-content-center">
      <label>CONFIRMATION CODE:</label><br><br>
     <input type="text" name="" readonly value="<?php echo date("ymdsih",strtotime("now")); ?>" class = "textbox1">
    </div><br>
    <div class="row-1 d-flex justify-content-center">
      <h3>Use this confirmation code at the Cinema</h3>
    </div>
    <a href = "HomeWback.php"><button class = "btn-2" type= "button">Finish</button></a>
    </div>
    </div>
    </div>
</div>
  </body>