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
  echo $go1;

  if($go1)
  {
    if(mysqli_query($con, $sql_update1)) echo "1";
  	else echo mysqli_error($con);
  }
  if($go2)
  {
  	if(mysqli_query($con, $sql_update2)) echo "2";
  	else echo mysqli_error($con);
  }
  if($go3)
  {
  	if(mysqli_query($con, $sql_update3)) echo "3";
  	else echo mysqli_error($con);
  }
  if($go4)
  {
  	if(mysqli_query($con, $sql_update4)) echo "4";
  	else echo mysqli_error($con);
  }
  if($go5)
  {
  	if(mysqli_query($con, $sql_update5)) echo "5";
  	else echo mysqli_error($con);
  }
}
mysqli_close($con);
echo "<li class=\"starttag\">";
echo "<a href=\"A_shinchon.php\">back</a>";
echo "</li>";
?>
