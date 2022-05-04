<?php
  include 'D:\connect.php';
?>
<html>
    <head>
        <title>Purchasing</title>
        <link rel="stylesheet" href="tien_style.css">
        <!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>
    <body>
    <center><div class="box">
        <h1>Pop Corn</h1>
        <p>Promotion</p>
    </div></center>
<p></p>
    <form action = "Cart.php" method = "post" enctype = "multipart/form-data">
<div class="container">
    <div class="row">
<div class="pop">
                        <img class="image" src="1.jpg">
                        <h1>Sweet</h1>
						<?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 0";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
                        <input type="number" name = "Sweet" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>">
                    </div>
                </div>
                </div>



    <div class="container">
        <div class="row">
    <div class="pop">
        <img class="image" src="2.jpg" >
        <h1>Salty</h1>
						<?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 1";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
        <input type="number" name = "Salty" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>">
    </div>
</div>
</div>


<div class="container">
    <div class="row">
    <div class="pop">
        <img class="image" src="3.jpg" >
        <h1>BQQ</h1>
						<?php
							$sql = "SELECT Remain FROM itemstock WHERE ItemID = 2";
							$result = mysqli_query($connect,$sql) or die("Bad query");
							$row = mysqli_fetch_row($result);
							echo $row[0];
						?>
        <input type="number" name = "BQQ" placeholder="quantity" min = "0" max = "<?php echo $row[0]; ?>">
        <input type = "submit" name = "AddToCart" value = "add to cart">
    </div>
</div>
</div>
</form>
    </body>
</html>
