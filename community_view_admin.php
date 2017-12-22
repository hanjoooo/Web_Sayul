<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
  mysqli_select_db($con, "project");

  $insnum=$_POST['acvalue'];
  $sql_display = "SELECT * FROM community where number=$insnum";

  $result = mysqli_query($con, $sql_display);

while($row = mysqli_fetch_array($result)){
	echo "<h1>".htmlspecialchars($row['date'])."</h2>";
	echo "<h2>".htmlspecialchars($row['title'])."</h2>";
	//Header("Content-Type: image/png");
	echo "'".$row['context']."'";
	echo "<h3>".htmlspecialchars($row['writer'])."</h2>";
}
}
mysqli_close($con);
?>