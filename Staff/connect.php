<?php
		$server="localhost";
		$user="root";
		$pass="";
		$db="b4_minorcineplex";

		$connect=new mysqli($server,$user,$pass,$db);

		if($connect->connect_error){
		die("Connectoin failed : " .$connect->connect_error);
	}
		$connect->set_charset("utf8");

?>
