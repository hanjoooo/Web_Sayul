<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  $chk1=mysqli_select_db($con, "testing");
  echo '?'.$chk1;
  $sql_insert = "INSERT INTO test2(idx, name) VALUES ('helloworld')";
  $chk2=mysqli_query($con, $sql_insert);
  echo '-'.$chk2;
}
mysqli_close($con);
?>
