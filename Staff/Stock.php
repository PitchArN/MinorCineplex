<?php
include '../sql/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>MinorCineplex | Member</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "../popcron/tien_style.css" rel="stylesheet"/> 

</head>
<body>
<br>
<?php
  if (isset($_POST['NewItem'])) {
    $ID = mysqli_real_escape_string($connect,$_POST['ID']);
    $Name = mysqli_real_escape_string($connect,$_POST['Name']);
    $Type = mysqli_real_escape_string($connect,$_POST['Type']);
    $Price = mysqli_real_escape_string($connect,$_POST['Price']);
    $Detail = mysqli_real_escape_string($connect,$_POST['detail']);
    $ProID = mysqli_real_escape_string($connect,$_POST['proID']);
    $remain= mysqli_real_escape_string($connect,$_POST['remain']);

    $newItem = "INSERT INTO itemstock(ItemID,ItemName,ProductType,ProductDetails,Price,ProID,Remain) VALUES('$ID','$Name','$Type','$Detail','$Price','$ProID','$remain') ";
    $newItemQuery = mysqli_query($connect,$newItem);
    if($newItemQuery){
?>
      <div class="alert alert-success" role="alert">
        New Item Added
      </div>
<?php
    }else{
?>
    <div class="alert alert-danger" role="alert">
        Error On Add New Item
    </div>
<?php
    }
  }
?>
<?php 
    if (isset($_POST['AddStock'])) {
    $ID = mysqli_real_escape_string($connect,$_POST['itemID']);
    $remain= mysqli_real_escape_string($connect,$_POST['remain']);
    $findItemAmount = "SELECT Remain FROM itemstock WHERE ItemID = '$ID'";
    $findAmountQuery = mysqli_query($connect,$findItemAmount);
    $amount = mysqli_fetch_assoc($findAmountQuery);
    $newAmount = $amount['Remain']+$remain;

    $updateStock = "UPDATE itemstock SET Remain = '$newAmount' WHERE ItemID = '$ID'";
    $updateStockQuery = mysqli_query($connect,$updateStock);
    if($updateStockQuery){
?>
    <div class="alert alert-success" role="alert">
        Stock Added
    </div>
<?php      
    }else{
?>
    <div class="alert alert-danger" role="alert">
        Error To Update Stock
    </div>
<?php
    }

  }
?>

<div class="container px-4 bg-light rounded-3">
<!----------- UPDATE AMOUNT ITEM ------------------------->

<br>
<h1>Add Item To Stock</h1>
<form action="Stock.php" enctype="multipart/form-data" method="post">
<div class="row gx-3">
  <div class ="col">
  <label for="itemID" class="form-label">ProID</label>
  <select class="form-control" id="itemID" name="itemID">
    <?php
      $itemFind = "SELECT * FROM itemstock";
      $itemQuery = mysqli_query($connect,$itemFind);
      while($item = mysqli_fetch_assoc($itemQuery)){ 
    ?>
    <option value="<?php echo $item['ItemID'];?>">
      <?php echo $item['ItemID'].":".$item['ItemName']; ?>
    </option>
    <?php 
      }
    ?>
  </select>
</div>

  <div class ="col">
  <label for="remain" class="form-label">Amount(Add to Stock)</label>
  <input type="number" class="form-control" id="remain" min="0" name="remain" placeholder="Amount" required>
  <input type="submit" class = "btn-2"  name="AddStock" value="Add Stock">
</div>
</div>

</form>
<!-------------------------- Add New Item  ----------------------->
<form action="Stock.php" enctype="multipart/form-data" method="post">

<br>
<h1>Add New Item</h1>
<div class="row gx-3">
    <div class ="col">
  <label for="ID" class="form-label">ItemID</label>
  <input type="text" class="form-control" id="ID" name="ID" placeholder="ItemID" required>
</div>

  <div class ="col">
  <label for="Name" class="form-label">ItemName</label>
  <input type="text" class="form-control" id="Name" name="Name" placeholder="ItemName" required>
</div>
</div>

<div class="row gx-3">
    <div class ="col">
  <label for="Type" class="form-label">ItemType</label>
  <select class="form-control" id="Type" name="Type">
    <option>Popcorn</option>
    <option>Glass</option>
    <option>Decoration</option>
    <option>Snacks</option>
  </select>
</div>

  <div class ="col">
  <label for="Price" class="form-label">Price(In Cash And Point)</label>
  <input type="number" class="form-control" id="Price" min="0" name="Price" placeholder="Price" required>
</div>
</div>
<div class="row gx-3">
<div class ="col">
  <label for="detail" class="form-label">Item Detail</label>
  <textarea id="detail" name="detail" class="form-control"></textarea>
</div>
</div>
<br>
<div class="row gx-3">
    <div class ="col">
  <label for="proID" class="form-label">ProID</label>
  <select class="form-control" id="proID" name="proID">
    <?php
      $proFind = "SELECT * FROM promotion";
      $proQuery = mysqli_query($connect,$proFind);
      while($pro = mysqli_fetch_assoc($proQuery)){ 
    ?>
    <option value="<?php echo $pro['ProID'];?>">
      <?php echo $pro['ProID'].":".$pro['ProName']; ?>
    </option>
    <?php 
      }
    ?>
  </select>
</div>

  <div class ="col">
  <label for="remain" class="form-label">Amount(Add to Stock)</label>
  <input type="number" class="form-control" id="remain" min="0" name="remain" placeholder="Amount" required>
</div>
<br><br><br><br>

<center><input type="submit" class = "btn-2 me-2"  name="NewItem" value="Add New"></center>
<br>
</form>
</div>
<br>
<div class="row">
  <div class="col">
<table  class="table">
    <thead>
  <tr>
    <th scope="col">ItemID</th>
    <th scope="col">ItemName</th>
    <th scope="col">ProductType</th>
    <th scope="col">ProductDetails</th>
    <th scope="col">Price</th>

    <th scope="col">ProID</th>
    <th scope="col">Remain</th>
  </tr>
</thead>
<tbody>
<?php 
    $itemFind = "SELECT * FROM itemstock";
      $itemQuery = mysqli_query($connect,$itemFind);
      while($item = mysqli_fetch_assoc($itemQuery)){
?>
  <tr>
  <th><?php echo $item['ItemID']; ?></th>
  
  <td><?php echo $item['ItemName']; ?></td>
  <td><?php echo $item['ProductType']; ?></td>
  <td><?php echo $item['ProductDetails']; ?></td>
  <td><?php echo $item['Price']; ?></td>
  <td><?php echo $item['ProID']; ?></td>
  <td><?php echo $item['Remain']; ?></td>
  </tr>
<?php } ?>
</tbody>


</table>
</div></div>
</div>
<br>

<br><br><br><br>




 
  
</body>
</html>
