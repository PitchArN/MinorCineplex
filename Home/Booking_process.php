<?php 
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!---------- Boothstrap ------->

<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "Booking_process.css" rel="stylesheet"/> 
    <title>MinorCineplex | Seat Booking</title>
  </head>

  <body>



<div class = "wrapper">
  <a href = "#modalbox">Confirm</a>
<div>

<div id = "modalbox" class="modal">
  <div class = "modalcontent" align = "center">   
    <div>
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
  <br>
</div>


        <div class = "label">
  <div class="row">
    <?php
      $seatCount = count($seatList) - 1; 
      echo $seatCount." seat(s)"; ?>
  </div>
  <form action="payTicket.php" enctype="multipart/form-data" method="post"><br>
  <div class="row">
      <input type="hidden" name="movieID" value="<?php echo $movieID ?>">
      <input type="hidden" name="seats" value="<?php echo $seats ?>">
      <input type="hidden" name="StartDateTime" value="<?php echo $StartDateTime ?>">
      <h3><label for="ticketPromotion">Promotion Code</label><h3>
      <select name="" id="ProSelect" class = "proselect" onchange="update()">
      <option value="" class="btn-8 ">-----------------</option>
      
<?php 
//------------ query all promotion
    $today = date("y-m-d h:i:s",strtotime("now"));
    $promoSearch = "SELECT * FROM promotion WHERE '$today' > ProStartDate AND '$today' < ProEndDate";
    $promoSearchQuery = mysqli_query($connect,$promoSearch);
    while($pro = mysqli_fetch_assoc($promoSearchQuery)){
?>
    <option value="<?php echo $pro['Protype'];?>"><?php echo $pro['ProName']; ?></option>
<?php
    }
?>
    </select>
    <input type="hidden" name="ticketPromotion" id="ProID" readonly>

  </div>
  <div class="row">
   <div class = "bath">
      <h2><label for="confirmTicketOrder">
        <input type="hidden" id="totalOriginal" name="" value= "<?php echo $totalPrice; ?>">
        <input type="text" id="totalPrice" readonly class = "label" >
      </label></h2><br>
      </div>
      <input type="submit" name="confirmTicketOrder" class="btn-warning rounded-3" value="Confirm">
  </div>
  </form>
</div>
      </div>
<?php
  }

?>
</div>
  </div>
</div>





  </body>

  <script type="text/javascript">
const totalPrice = document.getElementById("totalPrice");
const promotionID = document.getElementById("ProID");
const totalOriginal = document.getElementById("totalOriginal").value;
//const proType = document.getElementById("ProType");

function update() {
        var select = document.getElementById('ProSelect');
        var option = select.options[select.selectedIndex];

        promotionID.value = option.value;
        livePromotion();
}


promotionID.addEventListener('change', livePromotion);

function resetPro(){
  totalPrice.value = totalOriginal;
}

function livePromotion() {
  //change proID to Protype


  if(promotionID.value == 10){
    var newPrice = totalOriginal * 0.9;
    totalPrice.value = newPrice.toString(10);
  }else if(promotionID.value== 20){
    var newPrice = totalOriginal * 0.8;
    totalPrice.value = newPrice.toString(10);
  }else if(promotionID.value == 50){
    var newPrice = totalOriginal * 0.5;
    totalPrice.value = newPrice.toString(10);
  }
  else{
    totalPrice.value = totalOriginal.toString(10);
  }
}

update();

</script>