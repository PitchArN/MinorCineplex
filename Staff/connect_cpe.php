<?php
		$server="localhost";
		$user="b4_cpe231_b4";
		$pass="vrpkj7k7";
		$db="b4_minorcineplex";
// North
		$connect=new mysqli($server,$user,$pass,$db);

		if($connect->connect_error){
		die("Connectoin failed : " .$connect->connect_error);
	}
		$connect->set_charset("utf8");

?>
