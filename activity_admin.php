<script type="text/javascript" >
function go(to_send) {
  var f=document.adcommentview;
  f.adcommentvalue.value=to_send;
  f.action="activity_admin_tripcomment.php";
  f.method="post";
  f.submit();
}
</script>
<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
  mysqli_select_db($con, "project");
  $sql_display = "SELECT * FROM nexttrip";

  $result = mysqli_query($con, $sql_display);

  echo "nexttrip"."<br/>";
  echo "<form action=\"activity_admin_nexttrip.php\" method=\"post\" >";
  
  while($row = mysqli_fetch_array($result)) {
	echo $row['name1']." ".$row['cnt1']."<br/>";
	echo $row['name2']." ".$row['cnt2']."<br/>";
	echo $row['name3']." ".$row['cnt3']."<br/>";
	echo $row['name4']." ".$row['cnt4']."<br/>";
	echo $row['name5']." ".$row['cnt5']."<br/>";
  }
  echo "<input type=\"text\" name=\"n1\"/><br/>";
  echo "<input type=\"text\" name=\"n2\"/><br/>";
  echo "<input type=\"text\" name=\"n3\"/><br/>";
  echo "<input type=\"text\" name=\"n4\"/><br/>";
  echo "<input type=\"text\" name=\"n5\"/><br/>";
  echo "<input type=\"submit\" value=\"change\"/>";
  echo "</form>";

  $sql_display2="select * from tripcomment";
  $result2=mysqli_query($con, $sql_display2);

  echo "tripcomment"."<br/>";
  echo "<form name=\"adcommentview\">";
  echo "<input type=\"hidden\" name=\"adcommentvalue\">";
  while($row2=mysqli_fetch_array($result2)) {
  	echo $row2['idx']." ".$row2['text']." ".$row2['author']." ".$row2['date']."<a href=\"javascript:go('".$row2['idx']."');\">erase</a>"."<br/>";
  }
  echo "</form>";
}
mysqli_close($con);
?>
