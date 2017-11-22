<?php
$con = mysqli_connect("localhost", "root", "rlagkswn113");
if (!$con) {
  die('Could not connect: ' . mysql_error);
} else {
  mysqli_select_db($con,"project" );
  $sql_display = "SELECT * FROM admin";
  $result = mysqli_query($con,$sql_display);
  echo "<table border=’1′> <tr> <th>ID</th> <th>NAME</th> <th>PHONE</th>
  <th>Update</th> <th>Delete</th></tr>";
$n = 1;
while($row = mysqli_fetch_array($result)){
  $id = $row['id'];
  echo "ss";
echo "<tr>";
echo "<td>" . $id . "</td>";
echo "<td>" . $row['pass'] . "</td>";
echo '<td><a href="./update.php?id='.$id.'">수정</a></td>';
echo '<td><a href="./delete.php?id='.$id.'">삭제</a></td>';

echo "</tr>";
$n++;
}
echo "</table>";
echo "<form action =\"insert.php\" method=\"POST\">";
echo "id : <input type=\"text\" id = \"id\"/> <br>";
echo "name : <input type=\"text\" id = \"name\"/> <br>";
echo "phone : <input type=\"text\" id = \"phone\"/> <br>";
echo "<input type=\"submit\" value = \"submit\"/>";
echo "</form>";
}
mysqli_close($con);
?>
