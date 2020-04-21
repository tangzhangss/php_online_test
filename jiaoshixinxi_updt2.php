<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$gonghao=$_POST["gonghao"];    $xingming=$_POST["xingming"];    $mima=$_POST["mima"];    $xingbie=$_POST["xingbie"];    $zhujiaokecheng=$_POST["zhujiaokecheng"];    $zhaopian=$_POST["zhaopian"];    $zhicheng=$_POST["zhicheng"];    $lianxidianhua=$_POST["lianxidianhua"];    $beizhu=$_POST["beizhu"];    
	$sql="update jiaoshixinxi set gonghao='$gonghao',xingming='$xingming',mima='$mima',xingbie='$xingbie',zhujiaokecheng='$zhujiaokecheng',zhaopian='$zhaopian',zhicheng='$zhicheng',lianxidianhua='$lianxidianhua',beizhu='$beizhu' where gonghao= '".$_SESSION["username"]."'";
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改教师信息</title>

<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
</head>
<script language="javascript">
function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改教师信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from jiaoshixinxi where gonghao='".$_SESSION["username"]."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr><td>工号：</td><td><input name='gonghao' type='text' id='gonghao' value='<?php echo mysql_result($query,0,gonghao);?>' readonly='readonly' /> 此项主键，不得修改</td></tr>      <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,0,xingming);?>' /></td></tr>      <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,0,mima);?>' /></td></tr>      <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>      <tr><td>主教课程：</td><td><input name='zhujiaokecheng' type='text' id='zhujiaokecheng' value='<?php echo mysql_result($query,0,zhujiaokecheng);?>' /></td></tr>      <tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,0,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>      <tr><td>职称：</td><td><input name='zhicheng' type='text' id='zhicheng' value='<?php echo mysql_result($query,0,zhicheng);?>' /></td></tr>      <tr><td>联系电话：</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='<?php echo mysql_result($query,0,lianxidianhua);?>' /></td></tr>      <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>      
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

