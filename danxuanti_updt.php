<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$kemu=$_POST["kemu"];$timu=$_POST["timu"];$xuanxiangA=$_POST["xuanxiangA"];$xuanxiangB=$_POST["xuanxiangB"];$xuanxiangC=$_POST["xuanxiangC"];$xuanxiangD=$_POST["xuanxiangD"];$daan=$_POST["daan"];
	$sql="update danxuanti set kemu='$kemu',timu='$timu',xuanxiangA='$xuanxiangA',xuanxiangB='$xuanxiangB',xuanxiangC='$xuanxiangC',xuanxiangD='$xuanxiangD',daan='$daan' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='danxuanti_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改单选题</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改单选题： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from danxuanti where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>题目：</td><td><textarea name='timu' cols='50' rows='8' id='timu'><?php echo mysql_result($query,$i,timu);?></textarea></td></tr>
      <tr>
        <td>课程：</td>
        <td><input name='kemu' type='text' id='kemu' size='50' value='<?php echo mysql_result($query,$i,kemu);?>' /></td>
      </tr>
      <tr><td>选项A：</td><td><input name='xuanxiangA' type='text' id='xuanxiangA' size='50' value='<?php echo mysql_result($query,$i,xuanxiangA);?>' /></td></tr><tr><td>选项B：</td><td><input name='xuanxiangB' type='text' id='xuanxiangB' size='50' value='<?php echo mysql_result($query,$i,xuanxiangB);?>' /></td></tr><tr><td>选项C：</td><td><input name='xuanxiangC' type='text' id='xuanxiangC' size='50' value='<?php echo mysql_result($query,$i,xuanxiangC);?>' /></td></tr><tr><td>选项D：</td><td><input name='xuanxiangD' type='text' id='xuanxiangD' size='50' value='<?php echo mysql_result($query,$i,xuanxiangD);?>' /></td></tr><tr><td>答案：</td><td><select name='daan' id='daan'>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
      </select></td></tr>
     <script language="javascript">
	 	document.form1.daan.value="<?php echo mysql_result($query,$i,daan);?>";
	 </script>
   
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

