<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Check Staff</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "../popcron/tien_style.css" rel="stylesheet"/> 

</head>
<body>


<br><br><br><br><br><br><br><br><br><br>
<!-- 5555555 -->



<!---- Sample -->
<center><div class="modalcontent">
<br>
<h1>Check In Staff</h1>



<br>
<form action="CheckStaff_process.php" enctype="multipart/form-data" method="post">

<div class="row gx-3">
<div class="col" align = "left">
<div class ="labelLeft"><label for="staffID" class="form-label">ID</label></div>
  <input type="number" class="form-control" id="staffID" name="staffID">
</div>

</div>
<div class="row gx-3">
<div class="col" align = "left">
  <label for="staffPassword" class="form-label">Staff Password</label>
  <input type="password" class="form-control" id="staffPassword" name="staffPassword" required>
</div>
</div>
<br>





<br>

<center><input type="submit" class = "btn-1 "  name="CheckIn" value="CheckIn"></center>
<br>
</div></center>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br>






</body>
</html>