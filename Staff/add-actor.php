<?php 
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>STAFF|Actor</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link rel="stylesheet" href="style.css">

</head>
<body>
    <!--- USELESS ALERT
    div class="alert alert-success" role="alert">
    This is a success alert—check it out!
    </div> --->
<!--------------------- SQL Action ---------->
<?php 
    if(isset($_POST['Current_Actor_To_Movie'])){
        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $actorID = mysqli_real_escape_string($connect,$_POST['currentActor']);
        $sql = "INSERT INTO movieactor(MovieID,ActorID) VALUES('$movieID','$actorID')";
        $insertMovieActorQuery = mysqli_query($connect,$sql);
        header("location: add-actor.php?movieID=".$movieID);
        exit(0);
        
    }

    if(isset($_POST['Add_Actor_To_Movie'])){
        //----------- add new actor to actor table
        $actorName = mysqli_real_escape_string($connect,$_POST['ActorName']);
        $countActor = "SELECT ActorID FROM actor";
        $numActor = mysqli_query($connect,$countActor);
        $actorID = mysqli_num_rows($numActor);

        //----------- add data to actor         
        $sql = "INSERT INTO actor(ActorID,ActorName) VALUES('$actorID','$actorName')";
        mysqli_query($connect,$sql);

        //----------- map into movieactor
        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $sql = "INSERT INTO movieactor(MovieID,ActorID) VALUES('$movieID','$actorID')";
        $insertMovieActorQuery = mysqli_query($connect,$sql);

        header( "location: add-actor.php?movieID=".$movieID);
        exit(0);
    }
    
    if(isset($_POST['Add_Actor'])){
        //----------- add new actor to actor table
        $actorName = mysqli_real_escape_string($connect,$_POST['ActorName']);
        $countActor = "SELECT ActorID FROM actor";
        $numActor = mysqli_query($connect,$countActor);
        $actorID = mysqli_num_rows($numActor);

        //----------- add data to actor         
        $sql = "INSERT INTO actor(ActorID,ActorName) VALUES('$actorID','$actorName')";
        mysqli_query($connect,$sql);
        header( "location: add-actor.php");
        exit(0);
    }
    
?>


    <br><br>
<div class="container px-4 bg-light rounded-3">
    <br>
<?php
    if(isset($_GET['movieID'])){
        $movieID = mysqli_real_escape_string($connect,$_GET['movieID']);        
        $sql = "SELECT * FROM movie WHERE movieID = '$movieID'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
        echo "<h1>Add New Actor to:".$row['MovieName']."</h1>";
?>
<!-------------------- SHOW ALL ACTOR IN THE MOVIE ----------------->
<div class="row gx-3">
<div class="col">
    <h3>List Of Actor(s) in This Movie </h3>
</div>
</div>
<div class="row gx-3">
<?php 
    $listAllActor = "SELECT * FROM movieactor INNER JOIN actor ON movieactor.ActorID = actor.ActorID WHERE movieactor.MovieID='$movieID'";
    $listActorQuery = mysqli_query($connect,$listAllActor);
    while ($anActor = mysqli_fetch_assoc($listActorQuery)) {
?>
<div class="col">
    <div class="border border-5px d-flex justify-content-center">
    <?php 
        echo $anActor['ActorName'];
    ?>
</div>
</div>
<?php 
    }
?>
</div>
<!-------------------- Add From CURRENT ACTOR ---------->
<form action="add-actor.php" enctype="multipart/form-data" method="post">
<div class="row gx-3">
<div class="col">
    <br>
    <label for="currentActor" class="form-label"><h3>Add From Current Database</h3></label>
    <br>
    <input type="text" name="movieID" id="movieID" value="<?php echo $movieID ?>" hidden>
    <select id="currentActor" name="currentActor">
<?php
    //show all actor that is not in the movie database
    $sql = "SELECT * FROM actor  WHERE NOT EXISTS (SELECT * FROM movieactor WHERE actor.ActorID = movieactor.ActorID AND movieactor.MovieID = '$movieID' ORDER BY ActorName ASC)";
    $actorQuery = mysqli_query($connect,$sql);
    while($rowActor = mysqli_fetch_assoc($actorQuery)){
?>
    <option value="<?php echo $rowActor['ActorID'];?>"><?php echo $rowActor['ActorID']." : ".$rowActor['ActorName']; ?></option>
<?php 
    }
?>
    </select>

</div>
</div>
<br>
<div class="row gx-3">
<div class="col">
    <input type="submit" name="Current_Actor_To_Movie" class="btn-warning rounded-3" value="ADD ACTOR">
</div>
</div>
</form>


<!-------------------- Add New Actor ------------>
<form action="add-actor.php" enctype="multipart/form-data" method="post">

<br>
<div class="row gx-3">
<div class="col">
    <input type="text" name="movieID" id="movieID" value="<?php echo $movieID ?>" hidden>
    <label for="ActorName" class="form-label"><h3>Add New Actor</h3></label>
    <input type="text" class="form-control" name="ActorName" id="ActorName" placeholder="ACTOR NAME">
</div>
</div>
<br>
<div class="row gx-3">
<div class="col">
    <input type="submit" name="Add_Actor_To_Movie" class="btn-warning rounded-3" value="ADD NEW ACTOR">
</form>
    
    <!------------- Go to add movie showtime -------------------->
    <form action="add-showtime.php" enctype="multipart/form-data" method="get">
    <input type="text" name="movieID" id="movieID" value="<?php echo $movieID ?>" hidden>
    <input class="btn-danger rounded-3" type="submit" value="Skip Add Actor" />
</form>
</div>
</div>


<br><br>
<?php 
    }
    else{
?>

<!------------------------------- Add Actor (Not into Movie) ------------->
<form action="add-actor.php" enctype="multipart/form-data" method="post">
<div class="row gx-3">
<div class="col">
    <label for="ActorName" class="form-label"><h3>Add New Actor</h3></label>
    <input type="text" class="form-control" name="ActorName" id="ActorName" placeholder="ACTOR NAME" required>
    <br>
    <input type="submit" name="Add_Actor" class="btn-warning rounded-3" value="ADD NEW ACTOR">
    <br><br>
</div>
</div>
</form>
<?php } ?>
</div>


</body>