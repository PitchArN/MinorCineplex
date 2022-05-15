<?php 
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>STAFF|Showtime</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link rel="stylesheet" href="style.css">


</head>

<body>
    <br><br>
<div class="container px-4 bg-secondary rounded-3 gx-3">

<?php 
    if(isset($_POST['AddShowtime'])&& isset($_POST['movieID'])){
        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $DateCount = mysqli_real_escape_string($connect,$_POST['DateCount']);
        //set price for each room
        $NormalPrice = mysqli_real_escape_string($connect,$_POST['NormalSeatPrice']);
        $PremiumPrice = mysqli_real_escape_string($connect,$_POST['PremiumSeatPrice']);

        //add seats+ seat price to seat4room
        $normalSeat = array("_0A","_1A","_2A","_3A","_4A","_5A","_6A","_7A","_8A","_9A","_0A","_1B","_2B","_3B","_4B","_5B","_6B","_7B","_8B","_9B","_0C","_1C","_2C","_3C","_4C","_5C","_6C","_7C","_8C","_9C","_0D","_1D","_2D","_3D","_4D","_5D","_6D","_7D","_8D","_9D","_0E","_1E","_2E","_3E","_4E","_5E","_6E","_7E","_8E","_9E");
        $premiumSeat = array("_0F","_1F","_2F","_3F","_4F","_5F","_6F","_7F","_8F","_9F","_0G","_1G","_2G","_3G","_4G","_5G","_6G","_7G","_8G","_9G");

        echo "movieID = ".$movieID."<br>";
        echo "DateCount = ".$DateCount."<br>";;
        $i = 1; // date index
        //loop all date in the list
        while($i<=$DateCount){
            echo "today(i) is :".$i."<br>";

            $j = 1+(($i-1)*5); // time index
            echo "j=".$j."<br>";
            $dateInput = "date".$i;
            echo "dateInput = ".$dateInput."<br>";
            if(!empty(($_POST[$dateInput]))){
                $timeInput = $j."time";
                //loop all time input that is not empty
                while(!empty($_POST[$timeInput])){
                ?>
                <br>
                <div class="row rounded-3 bg-light gx-3"><div class="col">
                <?php
   
                    echo "timeInput = ".$timeInput." <br>";
                    $roomInput = $j."room";
                    $date = mysqli_real_escape_string($connect,$_POST[$dateInput]);
                    $time = mysqli_real_escape_string($connect,$_POST[$timeInput]);
                    $room = mysqli_real_escape_string($connect,$_POST[$roomInput]);

                    echo $roomInput." = ".$room." | ";

                    $dateTime = $date." ".$time;
                    echo "DateTime = ".$dateTime."<br>";
                    $startDateTime = date("y-m-d h:i:s",strtotime($dateTime));
                    //$startDateTime = strtotime($dateTime);
                    echo "time = ".$startDateTime."<br>";


                    //---------------- find end time of the movie
                    $endDateTimeSearch = "SELECT Length FROM movie WHERE MovieID= '$movieID'";
                    $endDateTimeSearchQuery = mysqli_query($connect,$endDateTimeSearch);
                    $movieLenghtAs = mysqli_fetch_assoc($endDateTimeSearchQuery);
                    $movieLenght = $movieLenghtAs['Length']+40;

                    // 40 min for cleaning + ads
                    $endDateTime = date("y-m-d h:i:s",strtotime($startDateTime." + ".$movieLenght." minute"));

                    $dateForSearch = $date."%";
                    $roomForSearch = $room."%";
                    $listAllmovieShowInSameDayRoom = "SELECT * FROM movietime INNER JOIN movie ON (movie.MovieID = movietime.MovieID) WHERE StartDateTime LIKE '$dateForSearch' AND SeatID LIKE '$roomForSearch' ";
                    $allmovieShowSameDayRoomQuery = mysqli_query($connect,$listAllmovieShowInSameDayRoom);
                    $sameDayRoomCount = mysqli_num_rows($allmovieShowSameDayRoomQuery);
                    $sameDateTime = 0;
                    if($sameDayRoomCount!=0){
                        while($checker = mysqli_fetch_assoc($allmovieShowSameDayRoomQuery) ){
                            $checkerStart = $checker['StartDateTime'];
                            $checkerLenght = $checker['Length']+40;
                            $checkerEnd = date("y-m-d h:i:s",strtotime($checkerStart." + ".$checkerLenght." minute"));
                            //----------------- check collision ---------------------
                            if(
                                ($startDateTime >= $checkerStart && $endDateTime <= $checkerEnd)||// start later end first
                                ($startDateTime >= $checkerStart && $endDateTime >= $checkerEnd)||// start later end later
                                ($startDateTime <= $checkerStart && $endDateTime >= $checkerEnd)||// start first end later
                                ($startDateTime <= $checkerStart && $endDateTime <= $checkerEnd)// start first end first
                            ){
                                $sameDateTime++;
                            }
                        }    
                    }
                    
                    //--------------------- no collision --------------------------
                    if($sameDateTime == 0){
                        echo "<div class='btn-success round-3 gx-3'>--------- Added --------------</div></div></div>";
                        //----------------- INSERT INTO MOVIETIME
                        $sql = "INSERT INTO movietime(MovieID, StartDateTime, SeatID) VALUES('$movieID', '$startDateTime' , '$room' )";
                        $result = mysqli_query($connect,$sql);

                        //------------------ INSERT EACH SEAT TO THE SEAT4ROOM -----------------
                        foreach($normalSeat as $ns){
                            //combine room and seat
                            $seatID = $room.$ns;
                            $seatSql = "INSERT INTO seat4room(SeatID,MovieID,StartDateTime,SeatStyle,Price,SeatStatus) VALUES('$seatID','$movieID','$startDateTime','NORMAL','$NormalPrice',0)";
                            $seat4roomQuery = mysqli_query($connect,$seatSql); 
                        }

                        foreach($premiumSeat as $ps){
                            //combine room and seat
                            $seatID = $room.$ps;
                            $seatSql = "INSERT INTO seat4room(SeatID,MovieID,StartDateTime,SeatStyle,Price,SeatStatus) VALUES('$seatID','$movieID','$startDateTime','PREMIUM','$PremiumPrice',0)";
                            $seat4roomQuery = mysqli_query($connect,$seatSql); 
                        }
                    }else{
                        echo "<div class='btn-danger round-3 gx-3'>--------- HAS COLLISION CANNOT ADD --------------</div></div></div>";
                    }
                    
                    //go to next time
                    $j++;
                    $timeInput = $j."time";
                            
    

                }
            }
            //go to next date
            $i++;
            $dateInput = "date".$i;

            
    }
    }

?>
<br>
<div class="row">
<div class="col">
<a href="../Home/homeWback.php">
    <input type="submit" class="btn-danger rounded-3" value="Back To Home">
</a>
</div>
<div class="col">
    <a href="../Staff/LinkStaffMovie.php">
    <input type="submit" class="btn-warning rounded-3" value="ADD MORE MOVIE">
    </a>
</div>
</div>
<br>
</div>
<br><br>
</body>