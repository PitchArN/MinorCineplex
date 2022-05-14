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
session_start();
$ses_userid =$_SESSION[ses_userid];
$ses_username = $_SESSION[ses_username];
if($ses_userid <> session_id() or  $ses_username ==””){
echo “คุณยังไม่ได้ทำการ Log in”;
echo “<meta http-equiv=’refresh’ content=’2;URL=index.php’ />”;
}    else {
?>
<?php
$con    =    mysql_connect(“localhost”,”root”,”root”);
if(!$con) {    echo “Not connect”; }
mysql_select_db(“base”,$con);
mysql_query(“SET NAMES tis620”);
$result = mysql_query(“select * from user where username =’$_SESSION[ses_username]’ “);
while ($data = mysql_fetch_array($result) ) {
echo $data[username],”<br />”;
echo $data[lastname],”<br />”;
}
?>
<a href=”logout.php”>Log out</a>
</body>
</html>
<?php
}
?>
    </body>
</html>