<?php
$con = mysqli_connect("192.168.194.197", "root", "rlagns5345");
if(!$con){
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con, "project");
  $insname=$_POST['uname'];
  $insgender=$_POST['ugender'];
  $insage=$_POST['uage'];
  $insnational=$_POST['unational'];
  $insuniv=$_POST['uUnivers'];
  $insemail=$_POST['uEmail'];
  $insphone=$_POST['uPhone'];
  $insfacebook=$_POST['uFacebook'];
  $inskakao=$_POST['uKakao'];
  $insfavorite=$_POST['uFavorite'];
  $insexpect=$_POST['uExpect'];
  $inscomment=$_POST['comment'];

  $sql_select="SELECT COUNT(*) FROM recruit WHERE email='$insemail'";
  $check = mysqli_query($con, $sql_select);
  $result = mysqli_fetch_array($check);

  if($result['COUNT(*)']==0) {
    if($insname!="" && $insname!=NULL && $insgender!="" && $insgender!=NULL &&$insage!="" && $insage!=NULL &&$insnational!="" && $insnational!=NULL &&$insuniv!="" && $insuniv!=NULL &&$insemail!="" && $insemail!=NULL &&$insphone!="" && $insphone!=NULL &&$insfacebook!="" && $insfacebook!=NULL &&$inskakao!="" && $inskakao!=NULL &&$insfavorite!="" && $insfavorite!=NULL &&$insexpect!="" && $insexpect!=NULL) {
      echo "done";
      $sql_insert = "INSERT INTO recruit VALUES ('$insname', '$insgender', '$insage', '$insnational', '$insuniv', '$insemail', '$insphone', '$insfacebook', '$inskakao', '$insfavorite', '$insexpect', '$inscomment')";
      mysqli_query($con, $sql_insert);
    } else {
      echo "something is missing";
    } 
  } else {
    echo "same email exists";
  }
}
mysqli_close($con);
echo "<li class=\"starttag\">";
echo "<a href=\"recruit.html\">back</a>";
echo "</li>";
?>
