<?php

$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
      mysqli_select_db($con, "project");
      $temp=$_POST['qvalue'];
      $delpass=$_POST['password'];
      $sql_chk = "SELECT * FROM question WHERE (qNum='$temp') AND (password='$delpass')";

      $result = mysqli_query($con, $sql_chk);

      while($row = mysqli_fetch_array($result)){
        $sql_delete="DELETE FROM question WHERE (qNum='$temp') AND (password='$delpass')";
        mysqli_query($con, $sql_delete);
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

