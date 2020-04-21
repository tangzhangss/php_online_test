<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>课程信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有课程信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 课程名称：<input name="kechengmingcheng" type="text" id="kechengmingcheng" /> 类型：
  <select name='leixing' id='leixing' style='border:solid 1px #000000; color:#666666'>
    <option value="">所有</option>
	<option value="选修">选修</option>
    <option value="必修">必修</option>
  </select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>课程名称</td><td bgcolor='#CCFFFF'>学时</td><td bgcolor='#CCFFFF'>学分</td><td bgcolor='#CCFFFF'>类型</td><td bgcolor='#CCFFFF'>备注</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from kechengxinxi where 1=1";
  
if ($_POST["kechengmingcheng"]!=""){$nreqkechengmingcheng=$_POST["kechengmingcheng"];$sql=$sql." and kechengmingcheng like '%$nreqkechengmingcheng%'";}
if ($_POST["leixing"]!=""){$nreqleixing=$_POST["leixing"];$sql=$sql." and leixing like '%$nreqleixing%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,kechengmingcheng);?></td><td><?php echo mysql_result($query,$i,xueshi);?></td><td><?php echo mysql_result($query,$i,xuefen);?></td><td><?php echo mysql_result($query,$i,leixing);?></td><td><?php echo mysql_result($query,$i,beizhu);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=kechengxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="kechengxinxi_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">修改</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="kechengxinxi_list.php?pagecurrent=1">首页</a>, <a href="kechengxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="kechengxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="kechengxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

