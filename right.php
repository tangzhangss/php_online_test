<?php
session_start();

?>
<html>
<head>
<title>右边</title><link rel="stylesheet" href="css.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<style type="text/css">
<!--

.STYLE2 {color: #00FFFF}

-->
</style>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="11" align="center" background="images/1_03_02_01.jpg">&nbsp;</td>
    <td  align="center"><iframe frameborder="0" scrolling="auto" src="sy.php" name="mainFrame" width="100%" height="100%"></iframe></td>
    <td width="28" align="center" background="images/1_03_02_03.jpg">&nbsp;</td>
  </tr>
  
  <tr> 
    <td height="46" colspan="2" align="center" background="images/1_04_02.jpg"><font class="STYLE2" ><script>
function tick() {
var ye,mo,da
var hours, minutes, seconds, xfile;
var intHours, intMinutes, intSeconds;
var today;
today = new Date();
ye = today.getFullYear();
mo = today.getMonth()+1;
if (mo < 10) {
mo = "0"+mo;
}
da = today.getDate();
if (da < 10) {
da = "0"+da;
}
intHours = today.getHours();
intMinutes = today.getMinutes();
intSeconds = today.getSeconds();
if (intHours == 0) {
hours = "12:";
xfile = "PM";//午夜
} else if (intHours < 12) {
hours = intHours+":";
xfile = "AM";//上午
} else if (intHours == 12) {
hours = "12:";
xfile = "PM";//正午
} else {
intHours = intHours - 12
hours = intHours + ":";
xfile = "PM";//下午
}
if (intHours < 10) {
hours = "0"+intHours+":";
}
if (intMinutes < 10) {
minutes = "0"+intMinutes+":";
} else {
minutes = intMinutes+":";
}
if (intSeconds < 10) {
seconds = "0"+intSeconds+" ";
} else {
seconds = intSeconds+" ";
}
var color, size, face, out;
	var text = "black";
	var font_size = 1;
    var font_face = "Arial";
	color = (text)? text : "black";
	size = (font_size)? font_size : 1;
	face = (font_face)? font_face : "Arial";
timeString = "当前时间:";
timeString += ye+"-"+mo+"-"+da+"  ";
timeString += hours+minutes+seconds+" "+xfile+"&nbsp;&nbsp;&nbsp;";

Clock.innerHTML = timeString;
window.setTimeout("tick();", 100);
}
window.onload = tick;
</script>  <font id="Clock"
     
      align=center>&nbsp;
	  
	  </font></font></td>
    <td height="46" align="center" background="images/1_04_03.jpg">&nbsp;</td>
  </tr>
</table>
</body>
</html>
