
<?php 
include '../sql/connect.php';
session_start();
if(isset($_SESSION['memberID'])){
  $memberID = $_SESSION['memberID'];
}else{
  $memberID = 0;
}
if(isset($_SESSION['staffID'])){
  $staffID =$_SESSION['staffID'];
  $staffRole = $_SESSION['role'];
}else{
  $staffID = 0;
}

function generateToken() {
    return bin2hex(random_bytes(32));
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = generateToken();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="Booking_process.css" rel="stylesheet"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!---------- Boothstrap ------->
    <!---------- Responsive ------->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MinorCineplex | Seat Booking</title>
</head>
<body>
<div class="wrapper" align="center">
  <div id="modalbox" class="modal">
    <div class="modalcontent">  
      <?php 
      if(isset($_POST['confirmTicketOrder'])){

        $proID = $_POST['ticketPromotion'];
        $seats = $_POST['seats'];
        $seatList = explode(',', $seats);
        $movieID = $_POST['movieID'];
        $StartDateTime = $_POST['StartDateTime'];
        
        $howManyInTicketProduct = "SELECT TicketProductID FROM ticketproduct";
        $ticketProductQuery = mysqli_query($connect, $howManyInTicketProduct);
        $ticketProductID = mysqli_num_rows($ticketProductQuery);
        
        $dateTime = date("y-m-d H:i:s", strtotime("now"));
        $ticketOrderID = strtotime("now");

        $insertTicketProductStmt = $connect->prepare("INSERT INTO ticketproduct(TicketProductID, SeatID, ProID, StartDateTime) VALUES (?, ?, ?, ?)");
        $updateSeatStmt = $connect->prepare("UPDATE seat4room SET SeatStatus = 1 WHERE (SeatID = ? AND MovieID = ? AND StartDateTime = ?)");
        $insertTicketOrderStmt = $connect->prepare("INSERT INTO ticket_order(TicketOrderID, TimeDate, TicketProductID, MemberID, StaffID, PurchaseType) VALUES (?, ?, ?, ?, ?, ?)");

        foreach($seatList as $s) {
          if($s != "") {
            $ticketProductID = intval($ticketProductID);  // Ensure it's an integer
            $memberID = intval($memberID);                // Ensure it's an integer
            $staffID = intval($staffID);                  // Ensure it's an integer
            $purchaseType = 'Online';

            $insertTicketProductStmt->bind_param("isis", $ticketProductID, $s, $proID, $StartDateTime);
            $insertTicketProductStmt->execute();

            $startDateTime = date("Y-m-d H:i:s", strtotime($StartDateTime));
            $updateSeatStmt->bind_param("sis", $s, $movieID, $startDateTime);
            $updateSeatStmt->execute();

            $insertTicketOrderStmt->bind_param("isssis", $ticketOrderID, $dateTime, $ticketProductID, $memberID, $staffID, $purchaseType);
            $insertTicketOrderStmt->execute();

            $ticketProductID++;
          }
        }
      }
      ?>
      <div class="container">
        <div class="row-2 d-flex justify-content-center">
          <h1>Ticket Purchased, Thank You</h1><br>
        </div>
        <div class="row d-flex justify-content-center">
          <label>CONFIRMATION CODE:</label><br><br>
          <input type="text" name="" readonly value="<?php echo date("ymdsih", strtotime("now")); ?>" class="textbox1">
        </div><br>
        <div class="row-1 d-flex justify-content-center">
          <h3>Use this confirmation code at the Cinema</h3>
        </div>
        <a href="HomeWback.php"><button class="btn-2" type="button">Finish</button></a>
      </div>
    </div>
  </div>
</div>
</body>
</html>