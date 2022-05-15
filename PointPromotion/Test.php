<?php
  include '../sql/connect.php';
  session_start();
  if(isset($_SESSION['memberID'])){
    $memberID = $_SESSION['memberID'];
  }
  else
	$memberID = 0;
  if(isset($_SESSION['staffID'])){
    $staffID =$_SESSION['staffID'];
    $staffRole = $_SESSION['role'];
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | AnotherProduct</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="StyleTest2.css">
</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../Utility/pngtree-initial-m-graphic-design-template-vector-isolated-illustration-png-image_1716255-removebg-preview.PNG" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Minor Cineplex
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Home/HomeWback.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../Popcron/BuyPop.php">Popcorn</a></li>
            <li><a class="dropdown-item" href="../PointPromotion/Test.php">Another Products</a></li>
        
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
      </form>
      </div>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">

            <h1>POINT STORE</h1>
        
        <div class="ForMember">
            
            <div class="MemberPro1">
                <div class="Procontent1">
                    <span>Popcorn</span>
                    <h3>100 point</h3>
                    <p>offer ends after 3 days</p>
          <?php
            $sql = "SELECT Remain FROM itemstock WHERE ItemID = 2";
            $result = mysqli_query($connect,$sql) or die("Bad query");
            $row = mysqli_fetch_row($result);
            if($row[0] > 0){
              $ButtonShow = "view offer";
              $dis = '';
            }
            else{
              $ButtonShow = "Out";
              $dis = "disabled";
            }
          ?>
					<?php
						$sql = "SELECT Remain FROM itemstock WHERE ItemID = 2";
						$result = mysqli_query($connect,$sql) or die("Bad query");
						$row = mysqli_fetch_row($result);
						if($memberID == 0){
							$ButtonShow = "Need Login";
							$dis = "disabled";
						}
						else if($row[0] > 0){
							$ButtonShow = "view offer";
							$dis = '';
						}
						else{
							$ButtonShow = "Out";
							$dis = "disabled";
						}
					?>
                    <a href="PromotionFM1.php" ><button class="btn-2" <?php echo $dis?>><?php echo $ButtonShow?></button></a>
                </div>
            </div>
           
        </div>
  </div>

<div class="row bg-secondary">

           <h1>PROMOTION LIST</h1>
            <?php 
              $today = date("Y-m-d",strtotime("now"));
              $sql = "SELECT * FROM promotion";
              $Query = mysqli_query($connect,$sql);
              while ($result = mysqli_fetch_assoc($Query))  {
            ?>  
 
               <div class="card">
                 
                  <p><?php echo $result['ProID']." : ".$result['ProName']?></p>
                  <span><?php echo $result['Prodetails']; ?><br>
                    <?php echo "<b>Condition:</b>".$result['ProCondition']; ?><br>
                    <?php 
                      $start = date("d-m-Y",strtotime($result['ProStartDate']));
                      $end = date("d-m-Y",strtotime($result['ProEndDate']));
                      echo "<b>Promotion Period: </b><br>".$start."-".$end;
                    ?>
                  </span>
            </div>
            <?php 
              }
            ?>

               </div>

<br>

<br><br>

</div>
<br><br>



        <!--Contact-->


<style> .bg{
    background: rgba(0,0,0,0.6);
    color: white;
} 
</style>


<!---------------------------- Footer ------------------------>
<div class = "bg">
  <div class="container">
  <footer class="row row-cols-5 py-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>

    <div class="col">

    </div>

    
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2022 Minor Cineplex</p>
    </div>
  </footer>
  </div>
</div>

  
</body>
</html>