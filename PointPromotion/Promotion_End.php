<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel ="stylesheet" href = "Promotion_End.css">
</head>
<body>
    
  <div class = "wrapper" align = "center">
    <div id = "modalbox" class="modal">
      <div class = "box">
<div class="container">
      <div class="row-2  d-flex justify-content-center">
      <h1>
        Thank You
      </h1>
    </div>

    <div id="mid">
        </h2>
        <p> 
            มา 3 จ่าย 2</br>
            Detail โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น </br>
            โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น </br>
            โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น โปรโมชั่น</br>
        </p>
            <h4>QRCODE<h4>
        <p>
            Point Used :</br>
            Point Remain :</br>
        </p>
      </div>
    </div>
    <div class="row  d-flex justify-content-center">
      <label>CONFIRMATION CODE:</label><br><br>
     <input type="text" name="" readonly value="<?php echo date("ymdsih",strtotime("now")); ?>" class = "textbox1">
    </div><br>
    <div class="row-1 d-flex justify-content-center">
      <h3>Use this confirmation code at the Cinema</h3>
    </div>
    <a href = "../Home/HomeWback.php"><button class = "btn-2" type= "button">Finish</button></a>
    </div>
</div>
</div>
</div>
</body>
</html>