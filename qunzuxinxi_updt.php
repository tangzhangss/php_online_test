<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$qunzubianhao=$_POST["qunzubianhao"];    $qunzumingcheng=$_POST["qunzumingcheng"];    $fuzelaoshi=$_POST["fuzelaoshi"];    $zuyuanxuesheng=$_POST["zuyuanxuesheng"];    
	
	$sql="update qunzuxinxi set qunzubianhao='$qunzubianhao',qunzumingcheng='$qunzumingcheng',fuzelaoshi='$fuzelaoshi',zuyuanxuesheng='$zuyuanxuesheng' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改群组信息</title>

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
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>

<body>
<p>修改群组信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from qunzuxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>群组编号：</td><td><input name='qunzubianhao' type='text' id='qunzubianhao' value='<?php echo mysql_result($query,0,qunzubianhao);?>' /></td></tr>      <tr><td>群组名称：</td><td><input name='qunzumingcheng' type='text' id='qunzumingcheng' size='50' value='<?php echo mysql_result($query,0,qunzumingcheng);?>' /></td></tr>      <tr><td>负责老师：</td><td><input name='fuzelaoshi' type='text' id='fuzelaoshi' value='<?php echo mysql_result($query,0,fuzelaoshi);?>' /></td></tr>      <tr><td>组员学生：</td><td><input name='zuyuanxuesheng' type='text' id='zuyuanxuesheng' value='<?php echo mysql_result($query,0,zuyuanxuesheng);?>' size='50' style='border:solid 1px #000000; color:#666666' readonly='readonly' /><br><?php $sqlxiaduo="select yonghuming from xueshengxinxi order by id desc";$queryxiaduo=mysql_query($sqlxiaduo);$rowscountxiaduo=mysql_num_rows($queryxiaduo);for($ixiaduo=0;$ixiaduo<$rowscountxiaduo;$ixiaduo++){?><a onClick="hsgxia2shxurxu('<?php echo mysql_result($queryxiaduo,$ixiaduo,"yonghuming");?>','zuyuanxuesheng')" style="cursor:pointer"><?php echo mysql_result($queryxiaduo,$ixiaduo,"yonghuming");?></a>；<?php }?></td></tr>      
   
   
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
<p>&nbsp;</p>
</body>
</html>

