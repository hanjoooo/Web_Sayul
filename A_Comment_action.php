<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $inscontent=$_POST['content'];
  $insname=$_POST['name'];
  
  if(strlen($insname)<=20) {
  if(strlen($inscontent)<=50) {
	  if($insname!="" && $insname!=NULL && $inscontent!="" && $inscontent!=NULL) {
      date_default_timezone_set("Asia/Seoul");
	  	$insdate=date("y-m-d");
	  	$sql_insert = "INSERT INTO tripcomment(text, author, date) VALUES ('$inscontent', '$insname', '$insdate')";
	  	if(mysqli_query($con, $sql_insert)) echo "done";
	  	else echo mysqli_error($con);
	  } else {
	  	echo "nothing";
	  }
  } else {
  	echo "too much content";
  }
  } else {
  	echo "too much name";
  }
}
mysqli_close($con);
echo "<li class=\"starttag\">";
echo "<a href=\"A_shinchon.php\">back</a>";
echo "</li>";
?>
