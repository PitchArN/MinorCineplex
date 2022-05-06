<?php
	echo $_POST['Sweet'];
?>
<html>
    <head>
        <title>Bill</title>
        <link rel="stylesheet" href="tien_style.css">
        <!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
        <!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>


        <center><div class="box">
            <h1>Cart</h1>
        </div></center>
        <q></q>

        <center><div class="box">
            <div>
                    <!---------- Empty ------->
            </div>
            
                <h2>purchase Method</h2>
                <a class="button" href="Bill-con.php">Wallet</a>
                <a class="button" href="Bill-con.php">Shopee</a>
                <a class="button" href="Bill-con.php">Prompay</a>
            </div>
        <form action = "Bill-con.php" method = "post" enctype = "multipart/form-data">
				<input type = "hidden" name = "Sweet" value = "<?php echo $_POST['Sweet']; ?>">
				<input type = "hidden" name = "Salty" value = "<?php echo $_POST['Salty']; ?>">
				<input type = "hidden" name = "BBQ" value = "<?php echo $_POST['BBQ']; ?>">
                <input type = "submit" name = "ConfirmBut" value = "Confirm">
		</form>

    </body></center>
</html>
