<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container">
      <div class="row-2  d-flex justify-content-center">
      <h1>
        Ticket Purchased, Thank You
      </h1><br>
    </div>
    <div class="row  d-flex justify-content-center">
      <label>CONFIRMATION CODE:</label><br><br>
     <input type="password" name="" readonly value="<?php echo date("ymdsih",strtotime("now")); ?>" class = "textbox1">
    </div><br>
    <div class="row-1 d-flex justify-content-center">
      <h3>Use this confirmation code at the Cinema</h3>
    </div>
    <a href = "HomeWback.php"><button class = "btn-2" type= "button">Finish</button></a>
    </div>

</body>
</html>