<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$timu=$_POST["timu"];
    $daan=$_POST["daan"];
	$kemu=$_POST["kemu"];
    
	$sql="update panduanti set timu='$timu',daan='$daan',kemu='$kemu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='panduanti_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改判断题</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/hsgrili.js"></script>
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
<p>修改判断题： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from panduanti where id=".$id;
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
        <td><select name='kemu' id='kemu' >
          <?php getoption("kechengxinxi","kechengmingcheng")?>
        </select></td>
    </tr><script language="javascript">document.form1.kemu.value='<?php echo mysql_result($query,$i,kemu);?>';</script>
    <tr><td>答案：</td><td><select name='daan' id='daan' style='border:solid 1px #000000; color:#666666'>
      <option value="对">对</option>
      <option value="错">错</option>
    </select></td></tr><script language="javascript">document.form1.daan.value='<?php echo mysql_result($query,$i,daan);?>';</script>
    
   
   
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

