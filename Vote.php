<html>
<head>
	<title>BLUEB</title>
<SCRIPT LANGUAGE="JavaScript">
<!--
var ans = new Array;
var done = new Array;
function move(url) {
  location.href=url;
}
</SCRIPT>

<BODY>

<FORM>
<b>1. Where Do you want go in November first week</i>?</b><p>
<input type="radio" value="a" onClick="Engine(1, this.value)">Everland<br>
<input type="radio" value="b" onClick="Engine(1, this.value)">63building<br>
<input type="radio" value="c" onClick="Engine(1, this.value)">Indpendence Hall<br>
<input type="radio" value="d" onClick="Engine(1, this.value)">Lotte Tower<br>
<input type="radio" value="d" onClick="Engine(1, this.value)">Demilitarized zone<p>
<b>2. Why choose this place?</b><p>
	<textarea name=content rows=5 cols=70>
	</textarea><br><p>

<input type="button" onClick="move('A_shinchon.php');" value="Confirm" style="float:left">
</FORM>
