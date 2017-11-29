<?php

$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
      mysqli_select_db($con, "project");
      $temp=$_POST['qvalue'];
      $delpass=$_POST['password'];
      echo $temp;
      echo $delpass;
      $sql_chk = "SELECT * FROM question WHERE (qNum='$temp') AND (password='$delpass')";

      $result = mysqli_query($con, $sql_chk);

      while($row = mysqli_fetch_array($result)){
        $sql_delete="DELETE FROM question WHERE (qNum='$temp') AND (password='$delpass')";
        if(mysqli_query($con, $sql_delete)) echo "deleted";
        else echo mysqli_error($con);
      }
}
mysqli_close($con);
echo "<li class=\"starttag\">";
echo "<a href=\"QandA.php\">QnA</a>";
echo "</li>";

?>
