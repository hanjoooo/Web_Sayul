<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  $chk1=mysqli_select_db($con, "project");
  
  $sql_update1 = "UPDATE nexttrip SET cnt1=cnt1+1";
  $sql_update2 = "UPDATE nexttrip SET cnt2=cnt2+1";
  $sql_update3 = "UPDATE nexttrip SET cnt3=cnt3+1";
  $sql_update4 = "UPDATE nexttrip SET cnt4=cnt4+1";
  $sql_update5 = "UPDATE nexttrip SET cnt5=cnt5+1";
  
  $go1=$_POST['a'];
  $go2=$_POST['b'];
  $go3=$_POST['c'];
  $go4=$_POST['d'];
  $go5=$_POST['e'];

  if($go1)
  {
    mysqli_query($con, $sql_update1);
  }
  if($go2)
  {
  	mysqli_query($con, $sql_update2);
  }
  if($go3)
  {
  	mysqli_query($con, $sql_update3);
  }
  if($go4)
  {
    mysqli_query($con, $sql_update4);
  }
  if($go5)
  {
  	mysqli_query($con, $sql_update5);
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

