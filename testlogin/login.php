<?php
session_start();
?>
<html>
    <head>
    <title>MinorCineplex | Add Staff</title>
<!---------- Boothstrap ------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!---------- Responsive ------->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!---------- CSS -------------->
<link href = "../popcron/tien_style.css" rel="stylesheet"/> 
    </head>
    <body>
    <?php
$username = $_POST[username];
$password = $_POST[password];
$con    =    mysql_connect(“localhost”,”root”,”root”);
if(!$con) {    echo “Not connect”; }
mysql_select_db(“base”,$con);
mysql_query(“SET NAMES tis620”);
$result = mysql_query(“select * from user where username =’$username’  and password=’$password’ “);
$num = mysql_num_rows($result);
if($num <=0) {
echo “ไม่พบชื่อผู้ใช้นี้ในฐานข้อมูล”;
}    else {
$_SESSION[ses_userid] = session_id();
$_SESSION[ses_username] = $username;
echo “<meta http-equiv=’refresh’ content=’2;URL=index2.php’ />”;
while ($data = mysql_fetch_array($result) ) {
echo $data[username],”<br />”;
echo $data[lastname],”<br />”;;
}
}
?>
    </body>
</html>