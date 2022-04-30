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
<div class="container px-4 bg-light rounded-3">

<?php 
    if(isset($_POST['AddShowtime'])&& isset($_POST['movieID'])){
        $movieID = mysqli_real_escape_string($connect,$_POST['movieID']);
        $DateCount = mysqli_real_escape_string($connect,$_POST['DateCount']);
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
                    echo "timeInput = ".$timeInput." <br>";
                    $roomInput = $j."room";
                    $date = mysqli_real_escape_string($connect,$_POST[$dateInput]);
                    $time = mysqli_real_escape_string($connect,$_POST[$timeInput]);
                    $room = mysqli_real_escape_string($connect,$_POST[$roomInput]);

                    echo $roomInput." = ".$room." ";

                    $dateTime = $date." ".$time;
                    echo "DateTime = ".$dateTime."<br>";
                    $startDateTime = date("y-m-d h:i:s",strtotime($dateTime));
                    //$startDateTime = strtotime($dateTime);
                    echo "time = ".$startDateTime."<br>";
                    
                    
                    $sql = "INSERT INTO movietime(MovieID, StartDateTime, SeatID) VALUES('$movieID', '$startDateTime' , '$room' )";
                    $result = mysqli_query($connect,$sql);
                    
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
</div>




</body>
