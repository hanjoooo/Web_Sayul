<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
body {
	font-family: 'Nanum Gothic', sans-serif;
}
</style>

<script type="text/javascript">
	function move(url) {
		location.href=url;
	}
</script>
</head>

<body>
	<table summary="전체 테이블 구성">
 	<tr>
  		<td bgcolor=#dcdcdc height=25 align=center>Write Comment</td>
 	</tr>
	</table><br>

	<table summary= "답변 테이블 구성">
	<form name="BoardReplyForm" method="post" action="A_Comment_action.php">
 	<tr>
		<td>
		<table border=0 width=100% align=center>
	    <tr>
			<td align="center">Author</td>
			<td ><input type=text name="name" size=10 maxlength=8></td>
    	</tr>
		<tr>
			<td width=10% align="center">Contents</td>
			<td><textarea name="content" rows=10 cols=70></textarea></td>
		</tr>

			<td colspan=2><hr size=2></td>
		</tr>
		<tr>
			<td colspan="3" align="center">
			<input type="submit" value="Submit" class="btn" >&nbsp;
			<input type="button" value="Back" onclick="javascript:history.back()">
			</td>
		</tr>
		</table>
		</td>
		</tr>
	</form>
	</table>
</body>
</html>