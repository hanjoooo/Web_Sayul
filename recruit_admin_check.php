<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
  if(!$con){
    die('Could not connect: ' . mysql_error);
  } else {
    mysqli_select_db($con, "project");

    $tempemail=$_POST['qvalue'];
    $sql_update = "update recruit set confirmed=true where email='$tempemail'";
    if($result=mysqli_query($con, $sql_update)) {
      while($row2=mysqli_fetch_array($result2)) {
      }
    }
    mysqli_close($con);
  }
?>

<html>
 <head>
 <title>..</title>
 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script language="JavaScript">
 function nextWin()
 {location = "recruit_admin.php"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 100)"/> <!--1000 이 1초 입니다.-->
</html>

