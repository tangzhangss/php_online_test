<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$bianhao=$_POST["bianhao"];$kemu=$_POST["kemu"];$danxuantishu=$_POST["danxuantishu"];$danxuanfenzhi=$_POST["danxuanfenzhi"];$tiankongtishu=$_POST["tiankongtishu"];$tiankongfenzhi=$_POST["tiankongfenzhi"];
	$sql="update shijuanshengcheng set bianhao='$bianhao',kemu='$kemu',danxuantishu='$danxuantishu',danxuanfenzhi='$danxuanfenzhi',tiankongtishu='$tiankongtishu',tiankongfenzhi='$tiankongfenzhi' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='shijuanshengcheng_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改试卷生成</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改试卷生成： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from shijuanshengcheng where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>编号：</td><td><input name='bianhao' type='text' id='bianhao' value='<?php echo mysql_result($query,$i,bianhao);?>' /></td></tr>
      <tr>
        <td>课程：</td>
        <td><select name='kemu' id='kemu' >
          <?php getoption("kechengxinxi","kechengmingcheng")?>
        </select></td>
      </tr><script language="javascript">document.form1.kemu.value='<?php echo mysql_result($query,$i,kemu);?>';</script>
      <tr><td>单选题数：</td><td><input name='danxuantishu' type='text' id='danxuantishu' value='<?php echo mysql_result($query,$i,danxuantishu);?>' /></td></tr><tr><td>单选分值：</td><td><input name='danxuanfenzhi' type='text' id='danxuanfenzhi' value='<?php echo mysql_result($query,$i,danxuanfenzhi);?>' /></td></tr><tr>
        <td>填空题数：</td>
        <td><input name='tiankongtishu' type='text' id='tiankongtishu' value='<?php echo mysql_result($query,$i,tiankongtishu);?>' /></td></tr><tr>
          <td>填空分值：</td>
          <td><input name='tiankongfenzhi' type='text' id='tiankongfenzhi' value='<?php echo mysql_result($query,$i,tiankongfenzhi);?>' /></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

