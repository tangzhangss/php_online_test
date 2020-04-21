<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$yonghuming=$_POST["yonghuming"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $dianhua=$_POST["dianhua"];    $weixin=$_POST["weixin"];    $gangwei=$_POST["gangwei"];    $shenfenzheng=$_POST["shenfenzheng"];    $zhaopian=$_POST["zhaopian"];    $beizhu=$_POST["beizhu"];    
	//lixandonxgjixelxb
	//qiuji
	//qiuhe
	ischongfu("select id from jingwurenyuan where  yonghuming='$yonghuming' or dianhua='$dianhua' or weixin='$weixin' or shenfenzheng='$shenfenzheng'");
	$sql="insert into jingwurenyuan(yonghuming,mima,xingming,xingbie,dianhua,weixin,gangwei,shenfenzheng,zhaopian,beizhu) values('$yonghuming','$mima','$xingming','$xingbie','$dianhua','$weixin','$gangwei','$shenfenzheng','$zhaopian','$beizhu') ";
	mysql_query($sql);
	//danjuzhixi;mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>警务人员</title>
<!--bixanjxiqxi-->
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
<p>添加警务人员： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yonghuming.value==""){alert("请输入用户名");document.form1.yonghuming.focus();return false;}    if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}    if(document.form1.dianhua.value==""){alert("请输入电话");document.form1.dianhua.focus();return false;}    if(document.form1.weixin.value==""){alert("请输入微信");document.form1.weixin.focus();return false;}    if(document.form1.shenfenzheng.value==""){alert("请输入身份证");document.form1.shenfenzheng.focus();return false;}    
}
	function gow()
	{
		location.href='jingwurenyuan_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<!--hxsglxiangdxongjxs-->
 <?php
//islbd1q $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbd2q $sql="select * from melieibaoduqubiaoiguo where hsgzhujian='".$_SESSION["username"]."'";
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>用户名：</td><td><input name='yonghuming' type='text' id='yonghuming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr>    <tr><td>电话：</td><td><input name='dianhua' type='text' id='dianhua' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>微信：</td><td><input name='weixin' type='text' id='weixin' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>岗位：</td><td><input name='gangwei' type='text' id='gangwei' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>    <tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的用户名或电话或微信或身份证已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

