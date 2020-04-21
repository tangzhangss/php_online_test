<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$timu=$_POST["timu"];
    $kemu=$_POST["kemu"];
	ischongfu("select id from danxuanti where timu='".$timu."' and kemu='".$kemu."'");
	$kemu=$_POST["kemu"];$timu=$_POST["timu"];$xuanxiangA=$_POST["xuanxiangA"];$xuanxiangB=$_POST["xuanxiangB"];$xuanxiangC=$_POST["xuanxiangC"];$xuanxiangD=$_POST["xuanxiangD"];$daan=$_POST["daan"];
	$sql="insert into danxuanti(kemu,timu,xuanxiangA,xuanxiangB,xuanxiangC,xuanxiangD,daan) values('$kemu','$timu','$xuanxiangA','$xuanxiangB','$xuanxiangC','$xuanxiangD','$daan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='danxuanti_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>单选题</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>添加单选题： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.kemu.value==""){alert("请输入章节");document.form1.kemu.focus();return false;}if(document.form1.timu.value==""){alert("请输入题目");document.form1.timu.focus();return false;}if(document.form1.xuanxiangA.value==""){alert("请输入选项A");document.form1.xuanxiangA.focus();return false;}if(document.form1.xuanxiangB.value==""){alert("请输入选项B");document.form1.xuanxiangB.focus();return false;}if(document.form1.xuanxiangC.value==""){alert("请输入选项C");document.form1.xuanxiangC.focus();return false;}if(document.form1.xuanxiangD.value==""){alert("请输入选项D");document.form1.xuanxiangD.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>题目：</td><td><textarea name='timu' cols='50' rows='8' id='timu'></textarea>&nbsp;*</td></tr>
	<tr>
	  <td>课程：</td>
	  <td><select name='kemu' id='kemu' ><?php getoption("kechengxinxi","kechengmingcheng")?></select></td>
    </tr>
	<tr><td>选项A：</td><td><input name='xuanxiangA' type='text' id='xuanxiangA' value='' size='50'  />&nbsp;*</td></tr><tr><td>选项B：</td><td><input name='xuanxiangB' type='text' id='xuanxiangB' value='' size='50'  />&nbsp;*</td></tr><tr><td>选项C：</td><td><input name='xuanxiangC' type='text' id='xuanxiangC' value='' size='50'  />&nbsp;*</td></tr><tr><td>选项D：</td><td><input name='xuanxiangD' type='text' id='xuanxiangD' value='' size='50'  />&nbsp;*</td></tr><tr><td>答案：</td><td><select name='daan' id='daan'>
	  <option value="A">A</option>
	  <option value="B">B</option>
	  <option value="C">C</option>
	  <option value="D">D</option>
	</select></td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
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
			echo "<script>javascript:alert('对不起，该题目已经存在，请换其他题目!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

