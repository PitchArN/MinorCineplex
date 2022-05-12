<?php
	if($_POST['Sweet'] == 0 && $_POST['Salty'] == 0 && $_POST['BBQ'] == 0){
		//echo "cannot order";
		header('Location:BuyPop.php');
	}
	else if ($_POST['Sweet'] > 0 || $_POST['Salty'] > 0 || $_POST['BBQ'] > 0){
		header('Location:Cart.php');
	}
?>