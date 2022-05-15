<?php 
  include '../sql/connect.php';
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
  
  <body onload="clearSeat()">
  
          
<?php
  if(isset($_POST['bookSeat'])){
    $room = mysqli_real_escape_string($connect,$_POST['roomID']);
    $StartDateTime = mysqli_real_escape_string($connect,$_POST['StartDateTime']);
    $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
    $roomSearch = $room."_%";

    $movieIn = "SELECT * FROM movie WHERE MovieID='$movieID'";
    $movieInQuery = mysqli_query($connect,$movieIn);
    $movie = mysqli_fetch_assoc($movieInQuery);

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
    // yes
    //$checkSeat = $room."_1A"; // change 1A to any seat mark
    //foreach ($bookSeatArray as $seat) {
    //  if($seat == $checkSeat)
    //    echo " sold";
    //}

?>

    <div class="movie-container">
      
    <h1><?php
        echo $movie['MovieName']; ?></h1>
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
        <?php //-------------------------------------------------------- 0A
        $checkSeat = $room."_0A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";         
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1A
        $checkSeat = $room."_1A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";         
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2A
        $checkSeat = $room."_2A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3A
        $checkSeat = $room."_3A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4A
        $checkSeat = $room."_4A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5A
        $checkSeat = $room."_5A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6A
        $checkSeat = $room."_6A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7A
        $checkSeat = $room."_7A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8A
        $checkSeat = $room."_8A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9A
        $checkSeat = $room."_9A"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>

      <!------------ Row B ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0B
        $checkSeat = $room."_0B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1B
        $checkSeat = $room."_1B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2B
        $checkSeat = $room."_2B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3B
        $checkSeat = $room."_3B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4B
        $checkSeat = $room."_4B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5B
        $checkSeat = $room."_5B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6B
        $checkSeat = $room."_6B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7B
        $checkSeat = $room."_7B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8B
        $checkSeat = $room."_8B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9B
        $checkSeat = $room."_9B"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>
      <!------------ Row C ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0C
        $checkSeat = $room."_0C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1C
        $checkSeat = $room."_1C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2C
        $checkSeat = $room."_2C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3C
        $checkSeat = $room."_3C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4C
        $checkSeat = $room."_4C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5C
        $checkSeat = $room."_5C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6C
        $checkSeat = $room."_6C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7C
        $checkSeat = $room."_7C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8C
        $checkSeat = $room."_8C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9C
        $checkSeat = $room."_9C"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>
      <!------------ Row D ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0D
        $checkSeat = $room."_0D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1D
        $checkSeat = $room."_1D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2D
        $checkSeat = $room."_2D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3D
        $checkSeat = $room."_3D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4D
        $checkSeat = $room."_4D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5D
        $checkSeat = $room."_5D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6D
        $checkSeat = $room."_6D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7D
        $checkSeat = $room."_7D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8D
        $checkSeat = $room."_8D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9D
        $checkSeat = $room."_9D"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>
      <!------------ Row E ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0E
        $checkSeat = $room."_0E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1E
        $checkSeat = $room."_1E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2E
        $checkSeat = $room."_2E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3E
        $checkSeat = $room."_3E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4E
        $checkSeat = $room."_4E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5E
        $checkSeat = $room."_5E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6E
        $checkSeat = $room."_6E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7E
        $checkSeat = $room."_7E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8E
        $checkSeat = $room."_8E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9E
        $checkSeat = $room."_9E"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>
      <!------------ Row F ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0F
        $checkSeat = $room."_0F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1F
        $checkSeat = $room."_1F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2F
        $checkSeat = $room."_2F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3F
        $checkSeat = $room."_3F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4F
        $checkSeat = $room."_4F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5F
        $checkSeat = $room."_5F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6F
        $checkSeat = $room."_6F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7F
        $checkSeat = $room."_7F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8F
        $checkSeat = $room."_8F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9F
        $checkSeat = $room."_9F"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>
      <!------------ Row G ------------------------->
      <div class="row">
        <div class="seat
        <?php //-------------------------------------------------------- 0G
        $checkSeat = $room."_0G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>
        
        <div class="seat
        <?php //-------------------------------------------------------- 1G
        $checkSeat = $room."_1G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 2G
        $checkSeat = $room."_2G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 3G
        $checkSeat = $room."_3G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 4G
        $checkSeat = $room."_4G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 5G
        $checkSeat = $room."_5G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 6G
        $checkSeat = $room."_6G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 7G
        $checkSeat = $room."_7G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 8G
        $checkSeat = $room."_8G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        <div class="seat
        <?php //-------------------------------------------------------- 9G
        $checkSeat = $room."_9G"; // change 1A to any seat mark
        //echo $checkSeat;
        foreach ($bookSeatArray as $seat) {
          if($seat == $checkSeat)
            echo " sold";          
          
        }?>
        " Onclick="addSeat(this)" id="<?php echo $checkSeat; ?>" ></div>

        
      </div>

      
    </div>
    <form action="Booking_process.php" enctype="multipart/form-data" method="post">
   
    <div class="">

        <input type="text" name="movieID" id="movieID" value="<?php echo $movieID; ?>" readonly hidden>
        <input type="text" name="StartDateTime" id="StartDateTime" value="<?php echo $StartDateTime; ?>" readonly hidden>
        <input type="text" name="SeatSelected" id="SeatSelected" value="" hidden><br>
        <input type="submit" name="ConfirmBookSeat" class="w3-btn w3-hover-Yellow" value="Confirm">
      </div>
  </form>
<?php 
  }
?>

  </body>
<script type="text/javascript">
  document.getElementById("SeatSelected").value = "";

  function addSeat(element){


        if (element.classList.contains("seat") && !element.classList.contains("sold")){
          if(element.classList.contains("selected")){
            var removeSeat = document.getElementById("SeatSelected").value.replace(element.id+",",'');
            document.getElementById("SeatSelected").value = removeSeat;
            element.classList.toggle("selected");

          }else{
            element.classList.toggle("selected");
            document.getElementById("SeatSelected").value += element.id+",";
          }
        }
  }

  function clearSeat(){
    document.getElementById("SeatSelected").value="";
  }

</script>

</html>
