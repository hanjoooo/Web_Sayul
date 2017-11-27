<?php
echo"<h1>참가 신청서 관리</h1>";
$con = mysql_connect("localhost", "root", "rlagns5345");
  if(!$con){
    die('Could not connect: ' . mysql_error);
  } else {
    mysql_select_db("project", $con);
    $sql_display = "SELECT * FROM recruit";
    $result2=mysql_query($sql_display, $con);
    echo "<table border=\"1\" summary=\"목록 테이블 구성\" width=\"600\" height=\"50\" border=\"1\" style=\"background:#ffffff;\">";
    echo "<tr>";
    echo "<td  width=\"20%\">Name</td>";
    echo "<td width=\"20%\">Age</td>";
    echo "<td  width=\"50%\">Nationality</td>";
    echo "</tr>";
    while($row2=mysql_fetch_array($result2)) {
       echo "<tr>";
       echo "<td  width=\"20%\">".$row2['name']."</td>";
       echo "<td width=\"20%\">".$row2['age']."<br></td>";
       echo "<td  width=\"30%\">".$row2['nationality']."</td>";
       echo "</tr>";
    }
    echo "</table>";
    mysql_close($con);
}
?>
