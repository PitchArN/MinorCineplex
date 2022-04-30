
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
<h1>

<?php 
	include 'connect.php';

	//recieve data from form

	if(isset($_POST['add_movie'])){
		$movieName = mysqli_real_escape_string($connect,$_POST['movieName']);
		$movieLenght = mysqli_real_escape_string($connect,$_POST['movieLenght']);
		$movieRating = mysqli_real_escape_string($connect,$_POST['movieRating']);
		$movieRateAge = mysqli_real_escape_string($connect,$_POST['movieRateAge']);
		$posterURL = mysqli_real_escape_string($connect,$_POST['posterURL']);
		$trailerURL = mysqli_real_escape_string($connect,$_POST['trailerURL']);
		$movieDes = mysqli_real_escape_string($connect,$_POST['movieDes']);

		$genreNum = 0;
		$genreI=0;
		$genreToAdd = array();
		//query all genre in the database
		$sql = "SELECT * FROM genre ORDER BY genre ASC";
  		$result=mysqli_query($connect,$sql);
  		while($row=mysqli_fetch_assoc($result)){
      		$genre = $row['Genre'];
      		//loop to get all value of genre in the movie into array
      		if(!empty($_POST[$genreNum])) {
      			$genreToAdd[$genreI] = mysqli_real_escape_string($connect,$_POST[$genreNum]);
      			$genreI++;
      		}
      		$genreNum++;
      		
      	}

      	//on error recieve

      	//sql adding zone
      	$countMovies = "SELECT MovieID FROM movie";
      	$numMovies = mysqli_query($connect,$countMovies);
      	$row = mysqli_num_rows($numMovies) ;

		//add data to movie      	
      	$sql = "INSERT INTO movie(MovieID,MovieName,Length,Details,Rating,RateAges,Poster,TrailerURL) VALUES('$row','$movieName','$movieLenght','$movieDes','$movieRating','$movieRateAge','$posterURL','$trailerURL')";
      	mysqli_query($connect,$sql);

      	//add data to genre (mapping movie with multiple genre)
      	foreach($genreToAdd as $addGenre){
      		$sql = "INSERT INTO moviegenre(movieID,genre) VALUES('$row','$addGenre')";
      		mysqli_query($connect,$sql);
      	}

      	header( "location: add-actor.php?movieID=".$row);
 		exit(0);
	}
	

	





?>
<br>
<?php 

	echo $movieName;
	echo $movieLenght;
	echo $movieRating;
	echo $movieRateAge;
	echo $posterURL;
	echo $trailerURL;
	echo $movieDes;

	


	foreach ($genreToAdd as $genre) {
		// code...
		echo $genre;
	}
	echo $row;
	echo "genreNUM:".$genreNum;
	echo "genreI:".$genreI;
?>


</h1>

</body>