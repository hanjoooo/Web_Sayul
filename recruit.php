<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
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

  if(preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$insemail)) {
  if(ctype_digit($insage)) {
  if(strlen($inscomment)<=200) {

  $sql_select="SELECT COUNT(*) FROM recruit WHERE email='$insemail'";
  $check = mysqli_query($con, $sql_select);
  $result = mysqli_fetch_array($check);

  if($result['COUNT(*)']==0) {
    if($insname!="" && $insname!=NULL && $insgender!="" && $insgender!=NULL &&$insage!="" && $insage!=NULL &&$insnational!="" && $insnational!=NULL &&$insuniv!="" && $insuniv!=NULL &&$insemail!="" && $insemail!=NULL) {
      $sql_insert = "INSERT INTO recruit VALUES ('$insname', '$insgender', '$insage', '$insnational', '$insuniv', '$insemail', '$insphone', '$insfacebook', '$inskakao', '$insfavorite', '$insexpect', '$inscomment', false)";
      mysqli_query($con, $sql_insert);
    } 
  } 
} 
} 
} 
}
mysqli_close($con);
?>
<html>
 <head>
 <title>..</title>
 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script language="JavaScript">
 function nextWin()
 {location = "recruit.html"}
 </script>
 </head>
 <body onLoad="setTimeout('nextWin()', 1000)"/> <!--1000 이 1초 입니다.-->
</html>

