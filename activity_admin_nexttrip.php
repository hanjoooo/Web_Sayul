<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  $chk1=mysqli_select_db($con, "project");
  $temp1=$_POST['n1'];
  $temp2=$_POST['n2'];
  $temp3=$_POST['n3'];
  $temp4=$_POST['n4'];
  $temp5=$_POST['n5'];

  $sql_update = "UPDATE nexttrip SET name1='$temp1', cnt1=0, name2='$temp2', cnt2=0, name3='$temp3', cnt3=0, name4='$temp4', cnt4=0, name5='$temp5', cnt5=0";
  mysqli_query($con, $sql_update);
}
mysqli_close($con);
?>
<html>
 <head>
 <title>..</title>
 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script language="JavaScript">
 function nextWin()
 {location = "activity_admin.php"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 1000)"/> <!--1000 이 1초 입니다.-->
</html>