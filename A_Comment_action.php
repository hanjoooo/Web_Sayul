<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $inscontent=$_POST['content'];
  $insname=$_POST['name'];
  
  if(strlen($insname)<=20) {
  if(strlen($inscontent)<=50) {
	  if($insname!="" && $insname!=NULL && $inscontent!="" && $inscontent!=NULL) {
      date_default_timezone_set("Asia/Seoul");
	  	$insdate=date("y-m-d");
	  	$sql_insert = "INSERT INTO tripcomment(text, author, date) VALUES ('$inscontent', '$insname', '$insdate')";
	  	mysqli_query($con, $sql_insert);
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
 {location = "A_shinchon.php"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 1000)"/> <!--1000 이 1초 입니다.-->
</html>

