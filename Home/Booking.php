<?php 
  include 'connect.php';
?>
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
  if(isset($_POST['bookSeat'])){
    $room = mysqli_real_escape_string($connect,$_POST['roomID']);
    $StartDateTime = mysqli_real_escape_string($connect,$_POST['StartDateTime']);
    $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
    $roomSearch = $room."_%";

    $movieIn = "SELECT * FROM movie WHERE MovieID='$movieID'";
    $movieInQuery = mysqli_query($connect,$movieIn);
    $movie = mysqli_fetch_assoc($movieInQuery);

    //each seat must search for the seat in the room got from post method
    // how to get fast query? 
    // dont know

    //same movieID StartDateTime and begin with same roomID
    $seatSql = "SELECT * FROM seat4room WHERE MovieID='$movieID' AND StartDateTime = '$StartDateTime' AND SeatID LIKE '$roomSearch' ";
    $seatQuery = mysqli_query($connect,$seatSql);
    //$freeSeatArray = array();
    $bookSeatArray = array();
    $i = 0;

    while($seat = mysqli_fetch_assoc($seatQuery)){
      if($seat['SeatStatus']==1)
        $bookSeatArray[$i++] = $seat['SeatID'];
    }

    
    //can I use this?
    $checkSeat = $room."_1A"; // change 1A to any seat mark
    foreach ($bookSeatArray as $seat) {
      if($seat == $checkSeat)
        echo "sold";
    }

?>
    <div class="movie-container">
      
    <h1><?php echo $movie['MovieName']; ?></h1>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <!------------ Row A ------------------------->
      <div class="row">
        <div class="seat
        <?php //can I use this?
        $checkSeat = $room."_1A"; // change 1A to any seat mark
        echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
            if($seat == $checkSeat)
              echo "sold";
        }?>
        "></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <!------------ Row B ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <!------------ Row C ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <!------------ Row D ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <!------------ Row E ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <!------------ Row F ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <!------------ Row G ------------------------->
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
        >0</span>
    </p>
<?php 
  }
?>

  </body>

</html>
