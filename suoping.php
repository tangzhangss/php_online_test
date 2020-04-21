<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title>临时离开</title> 
<style type="text/css">
<!--
body {
	background-color: #999999;
}
-->
</style></head> 
<body> 



	
<script language="javascript"> 


function sAlert() 
{ 

document.onkeydown = function(){
          if(event.keyCode==116) {
          event.keyCode=0;
          event.returnValue = false;
          }
     }
    
document.oncontextmenu = function() {event.returnValue = false;}
var msgw,msgh,bordercolor; 
msgw=400;//提示窗口的宽度 
msgh=100;//提示窗口的高度 
titleheight=25 //提示窗口标题高度 
bordercolor="#336699";//提示窗口的边框颜色 
titlecolor="#99CCFF";//提示窗口的标题颜色 
var sWidth,sHeight; 
sWidth=document.body.offsetWidth;//获取窗口宽度 
sHeight=screen.height;//获取屏幕高度 
var bgObj=document.createElement("div");//关键在这里，原理：在body中创建一个div，并将其宽度与高度设置为覆盖整个窗体，如此一来就无法对其它窗口时行操作 
bgObj.setAttribute('id','bgDiv'); 
bgObj.style.position="absolute"; 
bgObj.style.top="0"; 
bgObj.style.background="#777"; 
bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75"; 
bgObj.style.opacity="0.6"; 
bgObj.style.left="0"; 
bgObj.style.width=sWidth + "px"; 
bgObj.style.height=sHeight + "px"; 
bgObj.style.zIndex = "10000"; 
document.body.appendChild(bgObj);//设置完此div后将其显示出来 
var msgObj=document.createElement('div');//创建一个消息窗口 
msgObj.setAttribute("id","msgDiv"); 
msgObj.setAttribute("align","center"); 
msgObj.style.background="white"; 
msgObj.style.border="1px solid " + bordercolor; 
msgObj.style.position = "absolute"; 
msgObj.style.left = "50%"; 
msgObj.style.top = "50%"; 
msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif"; 
msgObj.style.marginLeft = "-225px" ; 
msgObj.style.marginTop = -75+document.documentElement.scrollTop+"px"; 
msgObj.style.width = msgw+"px"; 
msgObj.style.height = msgh+"px"; 
msgObj.style.textAlign = "center"; 
msgObj.style.lineHeight ="25px"; 
msgObj.style.zIndex = "10001"; 
var title=document.createElement("h4"); //创建一个标题，以备放置在消息层 
title.setAttribute("id","msgTitle"); 
title.setAttribute("align","right"); 
title.style.margin="0"; 
title.style.padding="3px"; 
title.style.background=bordercolor; 
title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);"; 
title.style.opacity="0.75"; 
title.style.border="1px solid " + bordercolor; 
title.style.height="18px"; 
title.style.font="12px Verdana, Geneva, Arial, Helvetica, sans-serif"; 
title.style.color="white"; 
title.style.cursor="pointer"; 
title.innerHTML=""; 
//title.onclick=function() 
//{ 
//document.body.removeChild(bgObj);//移除覆盖整个窗口的div层 
//document.getElementById("msgDiv").removeChild(title);//移除标题 
//document.body.removeChild(msgObj);//移除消息层 
//} 
document.body.appendChild(msgObj); 
document.getElementById("msgDiv").appendChild(title); 
var txt=document.createElement("p"); 
txt.style.margin="1em 0" 
txt.setAttribute("id","msgTxt"); 
txt.innerHTML="<form action='jiesuo.php' method='post'><table><tr><td align=center>请输入您的密码：<input type='text' name='suopinmima'><input type='submit' name'Submit' value='解锁' /></td></tr></table></form>"; 
document.getElementById("msgDiv").appendChild(txt); 
} 
</script> 
<?php
if($_GET["js"]=="1")
{
	?>
		<script language="javascript"> 
		location.href='main.php';
	</script>
	<?php
	}
else
{
?>
	<script language="javascript"> 
sAlert();
	</script>
	<?php
}
	?>
</body> 
</html> 
