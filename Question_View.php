<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Question</title>
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
table.type04 {
	width:70%;
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
table.type05 {
	width:70%;
	border-collapse: separate;
	border-spacing: 1px;
	text-align: left;
	line-height: 1.5;
	border-top: 1px solid #ccc;

margin : 20px 10px;
}
table.type04 th {
	border-bottom: 0px solid #ccc;
}
table.type04 td {
	border-bottom: 1px solid #ccc;
}

</style>
</head>

<body>
	
		<?php
		    

	        $con = mysqli_connect("localhost", "temp", "nk304704");
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
	          	echo" <table summary=\"전체 테이블 구성\" class=\"type04\">";
				echo"<tr>";
				echo"<td ><div align=\"center\"><h3><b>".$row['title']."</b></h3></div></td>";
				echo"</tr>";
				echo"<tr>";
				echo"<table class=\"type05\">";
	          	echo "<tr>";
	          	echo "<td align=left width=50%></td>";
	          	echo "<td align=right  width=5%> Author</td>";
	          	echo "<td align=right width=7%>".$row['author']."</td>";
	          	echo "<td align=right  width=7%> Date</td>";
				echo "<td align=right  width=10%>".$row['date']."</td>";
				echo "</tr>";
				echo "</tr>";
				echo "</table>";
				echo "<table class=\"type04\" width=\"100%\">";
				echo "<tr>";
				echo "<td><br>".$row['text']."<br><br><br></td>";
				echo "</tr>";
								
	          }

	          echo "<td align=\"center\" style=\"font-size:20px\">Reply</td>";
	          echo "</table>";
			  echo "<table class=type05>";
			  $sql_display2="SELECT * FROM reply WHERE qNumber=$save";
			  $result2=mysqli_query($con, $sql_display2);

			  while($row2=mysqli_fetch_array($result2)) {
			  	
			  	echo "<tr>";
			  	echo "<td  width=\"50%\" align=left>".$row2['replyText']."</td>";
			  	echo "<td align=right  width=5%> Author</td>";
			  	echo "<td align =right width =7% >".$row2['replyName']."<br></td>";
			  	echo "<td align=right  width=7%> Date</td>";
			  	echo "<td  align=right  width=10%>".$row2['replyDate']."</td>";
			  	echo "</tr>";
			  }
			  echo "</table>";
			  echo "</table>";
	        }
	        mysqli_close($con);
      	?>
  <table class="type05">
	<tr>
		<td align="center" colspan="2">
		<hr size="1">
		<div align="center">
		<form action="Question_Reply.php" method="post">
		<input type="hidden" name="qvalue" value="<?php echo $_POST['qvalue']; ?>"/>
		<input type="submit" value="reply"/> 
		</form>
		<form action="Question_Delete.php" method="post">
		<input type="hidden" name="qvalue" value="<?php echo $_POST['qvalue']; ?>"/>
		<input type="submit" value="delete"/><br>
		</form>
		</div>
		</td>
	</tr>
	</table>

</body>
</html>