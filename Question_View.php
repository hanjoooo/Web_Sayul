<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>글 읽기</title>
<script type="text/javascript">
	function move(url) {
		location.href=url;
	}
</script>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
body {
	font-family: 'Nanum Gothic', sans-serif;
}
</style>

Community

Activity

Recruit

QnA
</head>

<body>
	<table summary="전체 테이블 구성">
	<tr>
		<td ><div align="center"><h3><b>글 읽기</b></h3></div></td>
	</tr>
	<tr>
		<td colspan=2>
		<table border="1" summary="목록 테이블 구성" width="800" height="150" border="1" style="background:#ffffff;">
		<?php

	        $con = mysqli_connect("192.168.0.101", "root", "rlagns5345");
	        if(!$con){
	          die('Could not connect: ' . mysqli_error);
	        } else {
	          mysqli_select_db($con, "project");
	          $temp=$_POST['qvalue'];
	          $sql_display = "SELECT * FROM question WHERE qNum=$temp";

	          $result = mysqli_query($con, $sql_display);
	          $save=0;

	          while($row = mysqli_fetch_array($result)) {
	          	$save=$row['qNum'];
	          	echo "<tr>";
	          	echo "<td align=center  width=20%> Author</td>";
	          	echo "<td  width=20%>".$row['author']."</td>";
	          	echo "<td align=center  width=30%> Date</td>";
				echo "<td  width=50%>".$row['date']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td align=center > Title</td>";
				echo "<td  colspan=3>".$row['title']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=4><br>".$row['text']."<br></td>";
				echo "</tr>";
	          }
	          echo "</table>";
			  echo "<table border=\"1\" summary=\"목록 테이블 구성\" width=\"800\" height=\"50\" border=\"1\" style=\"background:#ffffff;\">";
			  echo "<tr>";
		      echo "Reply";
			  echo "</tr>";
			  $sql_display2="SELECT * FROM reply WHERE qNumber=$save";
			  $result2=mysqli_query($con, $sql_display2);

			  while($row2=mysqli_fetch_array($result2)) {
			  	echo "<tr>";
			  	echo "<td  width=\"20%\">".$row2['replyName']."</td>";
			  	echo "<td colspan=\"4\"><br>".$row2['replyText']."<br></td>";
			  	echo "<td  width=\"50%\">".$row2['replyDate']."</td>";
			  	echo "</tr>";
			  }
			  echo "</table>";
			  echo "</td>";
			  echo "</tr>";
	        }
	        mysqli_close($con);
      	?>
	<tr>
		<td align="center" colspan="2">
		<hr size="1">
		<div align="center">
		<form action="Question_Reply.php" method="post">
		<input type="hidden" name="qvalue" value="<?php echo $_POST['qvalue']; ?>"/>
		[<input type="submit" value="답변"/> |
		</form>
		<form action="Question_Delete.php" method="post">
		<input type="hidden" name="qvalue" value="<?php echo $_POST['qvalue']; ?>"/>
		<input type="submit" value="삭제"/>]<br>
		</form>
		</div>
		</td>
	</tr>
	</table>

</body>
</html>