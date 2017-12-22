<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $insnum=$_POST['qvalue'];
  $insname=$_POST['name'];
  $institle=$_POST['title'];
  $inscontent=$_POST['content'];
  $inspass=$_POST['password'];

  if(strlen($insname)<=20) {
  if(strlen($institle)<=20) {
  if(strlen($inspass)<=20) {
  if(strlen($inscontent)<=500) {
	  if($insnum!=NULL && $insname!="" && $insname!=NULL && $institle!="" && $institle!=NULL && $inscontent!="" && $inscontent!=NULL && $inspass!="" && $inspass!=NULL) {
      date_default_timezone_set("Asia/Seoul");
	  	$insdate=date("y-m-d");
	  	$sql_insert = "INSERT INTO reply VALUES ($insnum, '$insname', '$insdate', '$institle', '$inscontent', '$inspass')";
	  	mysqli_query($con, $sql_insert);
	  } 
  } 
  } 
  } 
  } 
}
mysqli_close($con);
?>
<html>
 <head>
 <title>..</title>
 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script language="JavaScript">
 function nextWin()
 {location = "QandA.php"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 1000)"/> <!--1000 이 1초 입니다.-->
</html>

