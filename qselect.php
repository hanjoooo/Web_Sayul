<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
  mysqli_select_db($con, "project");
  $sql_display = "SELECT * FROM admin";

  $result = mysqli_query($con, $sql_display);

  echo "questions";
while($row = mysqli_fetch_array($result)){
  $txt = $row['id'];
  echo $row;
echo "<br>" . $txt;
}
}
echo "<form method=\"post\" action=\"qinsert.php\">";
echo "<input name=\"qid\" type=\"text\"/><br>";
echo "<input name=\"qpass\" type=\"text\"/><br>";
echo "<input type=\"submit\"/>";
echo "</form>";
mysqli_close($con);
?>
