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
	<form name="BoardViewForm" method="post">
	<table class="type04" width ="1000">
	<tr>
		<td scope="row"align="center" ><h3><b>[신촌팀]2차여행-관광객 인식조사 캠페인</b></h3></td>
	</tr>
	<table  width ="300" style="border:0px; padding:0 0 0 10px; font-size:12px">
		 <tr>
			 <td >by</td>
       <td >7기 홍지윤</td>
			 <td > Date</td>
			 <td >2017.11.23</td>
		 </tr>
	</table>
	<table class="type04" width ="1000">
   <tr>
		<td >성래야 여기다가 내용 받아와서 꼳아라</td>
   </tr>

 	</tr>
	<tr>
		<td align=center colspan=2>
		<hr size=1>
		<div align="center">
		<input type="button" value="Add Comments" onclick="move('Question_Reply.html');">
		<input type="button" value="Back"  onClick="history.go(-1)"><br>
		</div>
		</td>
	</tr>
	</table>
</form>

</body>
</html>
