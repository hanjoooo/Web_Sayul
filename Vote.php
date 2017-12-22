<html>
<head>
	<title>BLUEB</title>
<SCRIPT LANGUAGE="JavaScript">
<!--
var ans = new Array;
var done = new Array;
function move(url) {
  location.href=url;
}
</SCRIPT>

<BODY>

<form action="Vote_action.php" method="post">
<b>1. Where Do you want go</i>?</b><p>
	<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  $chk1=mysqli_select_db($con, "project");
  
  $sql_select = "select * from nexttrip";
  $result = mysqli_query($con, $sql_select);
  
while($row = mysqli_fetch_array($result)){
	echo "<input type=\"checkbox\" name=\"a\" value=\"a\"/>".$row['name1']."<br>";
	echo "<input type=\"checkbox\" name=\"b\" value=\"b\"/>".$row['name2']."<br>";
	echo "<input type=\"checkbox\" name=\"c\" value=\"c\"/>".$row['name3']."<br>";
	echo "<input type=\"checkbox\" name=\"d\" value=\"d\"/>".$row['name4']."<br>";
	echo "<input type=\"checkbox\" name=\"e\" value=\"e\"/>".$row['name5']."<br>";
}
}
mysqli_close($con);
?>
<b>2. Why did you choose this place?</b><p>
<textarea name="content" rows=5 cols=70></textarea><br>
<input style="float:left" type="submit" value="Confirm">
</form>