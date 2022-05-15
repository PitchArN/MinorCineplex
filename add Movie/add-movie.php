<?php 
    include '../sql/connect.php';
    session_start();
    $staffID =$_SESSION['staffID'];
    $staffRole = $_SESSION['role'];
?>
<!DOCTYPE html>
<html>
<head>
<title>STAFF|Movies</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link rel="stylesheet" href="style.css">

</head>
<body>
<br><br>


<!------------------------------------ FOR ADD NEW MOVIE -------------------------------->


<form action="add-movie_process.php" enctype="multipart/form-data" method="post">
<div class="container px-4 bg-light rounded-3">
<br>
<h1>Add New Movie</h1>

<div class="row gx-3">
  <div class="col">
  <label for="MovieName" class="form-label">Movie Name</label>
  <input type="text" class="form-control" name="movieName" id="movieName" placeholder="MOVIE NAME" required>
</div>
</div>
<br>

<div class="row gx-3">
  <label for="MovieGenre" class="form-label">Genre</label>
</div>
<div class="row gx-3">
<?php 
  $sql = "SELECT * FROM genre ORDER BY genre ASC";
  $result=mysqli_query($connect,$sql);
  $genreNum = 0;
  while($row=mysqli_fetch_assoc($result)){
      $genre = $row['Genre'];
?>
<div class="col">
<div class="d-flex justify-content-center">
  <input type="checkbox" class="btn-check" id="<?php echo $genreNum ?>" name="<?php echo $genreNum ?>" value="<?php echo $genre ?>">
  <label class="btn btn-outline-warning" for="<?php echo $genreNum ?>"><?php echo $genre; ?></label>
</div>
</div>
<?php
  $genreNum +=1;
 }?>
</div>

<br>

<div class="row gx-3">
<div class="col">
  <label for="lenght" class="form-label">Lenght(MIN)</label>
  <input type="number" min="0" name="movieLenght" class="form-control" id="movieLenght" required>
</div>
<div class="col">
  <label for="rating" class="form-label">Rating</label>
  <input type="number" min="0" max="5" name="movieRating" class="form-control" id="movieRating" required>
</div>

<div class="col">
  <div class="form-group">
    <label  class="form-label" for="movieRateAge">Age Rate</label>
    <select class="form-control" name="movieRateAge" id="movieRateAge">
<?php 
  $sql = "SELECT * FROM rateage";
  $result=mysqli_query($connect,$sql);
  while($row=mysqli_fetch_assoc($result)){
      $rateage = $row['Rate'];
?>
    <option value="<?php echo $rateage; ?>"><?php echo $rateage; ?></option>
<?php } ?>
    </select>
  </div>
</div>
</div>
<br>

<div class="row gx-3">
<div class="col">
  <label for="posterURL" class="form-label">PosterURL</label>
  <input type="link" type="URL" name="posterURL" class="form-control" id="posterURL" required>
</div>
</div>
<br>

<div class="row gx-3">
  <div class="col">
  <label for="trailerURL" class="form-label">TrailerURL</label>
  <input type="link" type="URL" name="trailerURL" class="form-control" id="trailerURL" required>
</div>
</div>
<br>

<div class="row gx-3">
  <div class="col">
  <label for="" class="form-label">Movie Description</label>
  <textarea class="form-control" name="movieDes" id="movieDes" rows="3" required></textarea>
</div>
</div>
<br>



<div class="row gx-3">
  <div class="col">
<input type="submit" name="add_movie" class="btn-warning rounded-3" value="ADD MOVIE">
</div></div>
<br><br>
</form>
</div>
<br><br>

</body>
</html>
