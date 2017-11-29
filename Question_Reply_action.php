<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $insnum=$_POST['qvalue'];
  $insname=$_POST['name'];
  $institle=$_POST['title'];
  $inscontent=$_POST['content'];
  $inspass=$_POST['password'];

  echo $insnum;
  
  if(strlen($insname)<=20) {
  if(strlen($institle)<=20) {
  if(strlen($inspass)<=20) {
  if(strlen($inscontent)<=500) {
	  if($insname!="" && $insname!=NULL && $institle!="" && $institle!=NULL && $inscontent!="" && $inscontent!=NULL && $inspass!="" && $inspass!=NULL) {
      date_default_timezone_set("Asia/Seoul");
	  	$insdate=date("y-m-d");
	  	$sql_insert = "INSERT INTO reply VALUES ($insnum, '$insname', '$insdate', '$institle', '$inscontent', '$inspass')";
	  	if(mysqli_query($con, $sql_insert)) echo "done";
      else echo mysqli_error($con);
	  } else {
	  	echo "nothing";
	  }
  } else {
  	echo "too much content";
  }
  } else {
  	echo "too much password";  
  }
  } else { 
  	echo "too much title";
  }
  } else {
  	echo "too much name";
  }
}
mysqli_close($con);
echo "<li class=\"starttag\">";
echo "<a href=\"QandA.php\">QnA</a>";
echo "</li>";
?>
