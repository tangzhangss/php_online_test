<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>学生信息详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>学生信息详细：</p>
					<?php
$sql="select * from xueshengxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>用户名：</td><td width='39%'><?php echo mysql_result($query,0,yonghuming);?></td>      <td width='11%'>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>      <td width='11%'>姓名：</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td>      <td width='11%'>性别：</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr>      <td width='11%'>年龄：</td><td width='39%'><?php echo mysql_result($query,0,nianling);?></td>      <td width='11%'>班级：</td><td width='39%'><?php echo mysql_result($query,0,banji);?></td></tr><tr>      <td width='11%'>联系方式：</td><td width='39%'><?php echo mysql_result($query,0,lianxifangshi);?></td>      <td width='11%'>邮箱：</td><td width='39%'><?php echo mysql_result($query,0,youxiang);?></td></tr><tr>      <td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

