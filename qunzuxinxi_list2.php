<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>群组信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有群组信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 群组编号：<input name="qunzubianhao" type="text" id="qunzubianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 群组名称：<input name="qunzumingcheng" type="text" id="qunzumingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 排序
  <select name="paixu" id="paixu">
    <option value="addtime">添加时间</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">降序</option>
    <option value="asc">升序</option>
  </select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>群组编号</td>
    <td bgcolor='#CCFFFF'>群组名称</td>
    <td bgcolor='#CCFFFF'>负责老师</td>
    <td bgcolor='#CCFFFF'>组员学生</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from qunzuxinxi where fuzelaoshi = '".$_SESSION['username']."'";
  
if ($_POST["qunzubianhao"]!=""){$nreqqunzubianhao=$_POST["qunzubianhao"];$sql=$sql." and qunzubianhao like '%$nreqqunzubianhao%'";}
if ($_POST["qunzumingcheng"]!=""){$nreqqunzumingcheng=$_POST["qunzumingcheng"];$sql=$sql." and qunzumingcheng like '%$nreqqunzumingcheng%'";}
   if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
  
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
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,qunzubianhao);?></td>
    <td><?php echo mysql_result($query,$i,qunzumingcheng);?></td>
    <td><?php echo mysql_result($query,$i,fuzelaoshi);?></td>
    <td><?php echo mysql_result($query,$i,zuyuanxuesheng);?></td>
    
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">
	<a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=qunzuxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="qunzuxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a>
	 </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="qunzuxinxi_list2.php?pagecurrent=1">首页</a>, <a href="qunzuxinxi_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="qunzuxinxi_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="qunzuxinxi_list2.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

