<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>글 삭제하기</title>
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
	<center>
	<br><br>
	<table width="50%" cellspacing="0" cellpadding="3">
 		<tr>
			<td bgcolor="#dcdcdc" height="21" align="center">
			작성자의 비밀번호를 입력해 주세요.</td>
		</tr>
	</table>

	<form name="BoardDeleteForm" method="post" action="Question_Delete_action.php">
	<table width="70%" cellspacing="0" cellpadding="2">
 	<tr>
	<td align="center">
	<table align="center" border="0" width="91%">
    <tr>
     	<td align="center">
     	<input type="hidden" name="qvalue" value="<?php echo $_POST['qvalue']; ?>"/>
	  	<input type="password" name="password" size="17" maxlength="15"/>
	 	</td>
    </tr>
    <tr>
		<td><hr size="1" color="#eeeeee"></td>
	</tr>
    <tr>
		<td align="center">
		<input type="submit" value="삭제" />
		
		<input type="hidden" value="뒤로" />
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</form>
	</center>
</body>
</html>