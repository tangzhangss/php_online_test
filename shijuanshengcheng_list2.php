<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>试卷生成</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有试卷列表：</p>
<form id="form1" name="form1" method="post" action="">
  <p>搜索:编号:
  <input name="bh" type="text" id="bh" />
    课程:
    <input name="kemu" type="text" id="kemu" />
    <input type="submit" name="Submit" value="查找" />
  </p>
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">序号</td>
    <td width="107" bgcolor='#EBE2FE'>编号</td>
    <td width="107" bgcolor='#EBE2FE'>课程</td>
    <td width="192" bgcolor='#EBE2FE'>单选题数</td><td width="178" bgcolor='#EBE2FE'>单选分值</td><td width="170" bgcolor='#EBE2FE'>填空题数</td>
    <td width="181" bgcolor='#EBE2FE'>填空分值</td>
    <td width="148" align="left" bgcolor="#EBE2FE">判断题数</td>
    <td width="142" align="left" bgcolor="#EBE2FE">判断题分值</td>
    <td width="120" align="center" bgcolor="#EBE2FE">添加时间</td>
    <td width="70" align="center" bgcolor="#EBE2FE">操作</td>
  </tr>
  <?php 
    $sql="select * from shijuanshengcheng where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bianhao like '%$nreqbh%'";
}
     if ($_POST["kemu"]!="")
{
  	$nkemu=$_POST["kemu"];
  	$sql=$sql." and kemu like '%$nkemu%'";
}
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
    <td><?php echo mysql_result($query,$i,bianhao);?></td>
    <td><?php echo mysql_result($query,$i,kemu);?></td>
    <td><?php echo mysql_result($query,$i,danxuantishu);?></td><td><?php echo mysql_result($query,$i,danxuanfenzhi);?></td><td><?php echo mysql_result($query,$i,tiankongtishu);?></td><td><?php echo mysql_result($query,$i,tiankongfenzhi);?></td>
    <td width="148" align="left"><?php echo mysql_result($query,$i,panduantishu);?></td>
    <td width="142" align="left"><?php echo mysql_result($query,$i,panduanfenzhi);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=shijuanshengcheng" onclick="return confirm('真的要删除？')"></a> <a href="shijuan_detail2.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">开始考试</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"><a href="shijuanshengcheng_list.php?pagecurrent=1">首页</a>, <a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

