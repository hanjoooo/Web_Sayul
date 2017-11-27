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
<b>2. Why choose this(1) place?</b><p>
<input type="radio" value="a" onClick="Engine(2, this.value)">for food<br>
<input type="radio" value="b" onClick="Engine(2, this.value)">for cultural experience<br>
<input type="radio" value="c" onClick="Engine(2, this.value)">for activity<br>
<input type="radio" value="d" onClick="Engine(2, this.value)">other reason<p>

<CENTER>
<input type="button" onClick="move('A_shinchon.php');" value="Confirm">
</CENTER>
</FORM>
