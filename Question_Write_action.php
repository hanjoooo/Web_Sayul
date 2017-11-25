<?php
$con = mysqli_connect("192.168.0.101", "root", "rlagns5345");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $insname=$_POST['name'];
  $institle=$_POST['title'];
  $inscontent=$_POST['content'];
  $inspass=$_POST['password'];
  if(strlen($insname)<=20) {
  if(strlen($institle)<=20) {
  if(strlen($inspass)<=20) {
  if(strlen($inscontent)<=500) {
	  if($insname!="" && $insname!=NULL && $institle!="" && $institle!=NULL && $inscontent!="" && $inscontent!=NULL && $inspass!="" && $inspass!=NULL) {
	  	$insdate=date("y-m-d");
	  	$sql_insert = "INSERT INTO question (author, date, title, text, password) VALUES ('$insname', '$insdate', '$institle', '$inscontent', '$inspass')";
	  	mysqli_query($con, $sql_insert);
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
