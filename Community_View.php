<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">
	function move(url) {
		location.href=url;
	}
	function boardViewCheck() {
		var form = document.BoardViewForm;
		return true;
	}
</script>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
body {
	font-family: 'Nanum Gothic', sans-serif;
}
table.type04 {
  border-collapse: separate;
  border-spacing: 1px;
  text-align: left;
  line-height: 1.5;
  border-top: 1px solid #ccc;
margin : 20px 10px;
}
table.type04 th {
  width: 150px;
  padding: 10px;
  font-weight: bold;
  vertical-align: top;
  border-bottom: 1px solid #ccc;
}
table.type04 td {
  width: 350px;
  padding: 10px;
  vertical-align: top;
  border-bottom: 1px solid #ccc;
}
</style>
</head>

<body>
	<table class="type04" width ="1000">
	<?php
        $con = mysqli_connect("localhost", "temp", "nk304704");
        if(!$con){
          die('Could not connect: ' . mysqli_error);
        } else {
          mysqli_select_db($con, "project");
          $temp=$_POST['cvalue'];
          $sql_display = "SELECT * FROM community WHERE number=$temp";

          $result = mysqli_query($con, $sql_display);

          while($row = mysqli_fetch_array($result)){
          	echo "<tr>";
          	echo "<td scope=\"row\" align=\"center\" ><h3><b>".$row['title']."</b></h3></td>";
          	echo "</tr>";
          	echo "<table  width =\"300\" style=\"border:0px; padding:0 0 0 10px; font-size:12px\">";
          	echo "<tr>";
          	echo "<td>by</td>";
          	echo "<td>".$row['writer']."</td>";
          	echo "<td>date</td>";
          	echo "<td>".$row['date']."</td>";
          	echo "</tr>";
          	echo "</table>";
          	echo "<table class=\"type04\" width =\"1000\">";
          	echo "<tr>";
          	echo "<td>".$row['context']."</td>";
          	echo "</tr>";
          }
        }
        mysqli_close($con);
    ?>
	<tr>
		<td align=center colspan=2>
		<hr size=1>
		<div align="center">
		<input type="button" value="Back" onclick="move('c_shinchon.php');"><br>
		</div>
		</td>
	</tr>
	</table>

</body>
</html>