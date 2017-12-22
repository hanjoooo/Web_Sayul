<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  $chk1=mysqli_select_db($con, "project");

  	$insdate=$_POST['date'];
  	$institle=$_POST['title'];
  	$inswriter=$_POST['writer'];
    $inscontent=$_POST['advalue'];

 	$query="INSERT INTO community(writer, date, title, context, width, height) VALUES ('$inswriter', '$insdate', '$institle','$inscontent', 0, 0)";
 	$result=mysqli_query($con, $query);
}
mysqli_close($con);
?>
<html>
 <head>
 <title>..</title>
 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script language="JavaScript">
 function nextWin()
 {location = "community_admin.php"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 1000)"/> <!--1000 이 1초 입니다.-->
</html>

