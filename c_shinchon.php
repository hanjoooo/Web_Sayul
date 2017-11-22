<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style> #CONTENTS{ min-height: 1000px; }</style>
</head>

<body bgcolor="white">
  <div class="container" id="CONTENTS">
    <form id="FRM">
    <div class="row z-depth-1">
     <select name="days" style="display: inline-block;" onchange="javascript:selectdays(this)" id="selects">
       <option value="week" selected="week">일주일</option>
       <option value="2week" >15일</option>
       <option value="month" >최근한달</option>
       <option value="3month" >최근3달</option>
       <option value="3month" >최근6달</option>
     </select>


    <button type="button" onclick="location.href='./contents_frame.php' ">초기화</button>
  </div>
    </form>
  </div>


</script>
<?php
$con = mysqli_connect("192.168.199.240:3306", "root", "rlagns5345");
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
echo "<td>" . $row['passs'] . "</td>";
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

</body>
</html>
