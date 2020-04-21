<?php 
include_once 'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>试卷生成</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>我的成绩列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:试卷编号:
    <input name="bh" type="text" id="bh" />
    <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="23" bgcolor="#EBE2FE">序号</td>
    <td width="215" bgcolor='#EBE2FE'>试卷编号</td>
    <td width="232" bgcolor='#EBE2FE'>课程</td>
    <td width="230" bgcolor='#EBE2FE'>单选题得分</td>
    <td width="236" bgcolor='#EBE2FE'>填空题得分</td>
    <td width="215" bgcolor='#EBE2FE'>判断题得分</td>
    <td width="105" bgcolor='#EBE2FE'>总分</td>
    <td width="99" align="center" bgcolor="#EBE2FE">考试时间</td>
    <td width="103" align="center" bgcolor="#EBE2FE">查看答案</td>
  </tr>
  <?php 
    $sql="select * from chengji where yonghuming='".$_SESSION["username"]."'";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bianhao like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and kemu like '%$nreqmc%'";
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
    <td width="23"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,bianhao);?></td>
    <td><?php echo mysql_result($query,$i,kemu);?></td>
    <td><?php echo mysql_result($query,$i,danxuanti);?></td>
    <td><?php echo mysql_result($query,$i,tiankongti);?></td>
    <td><?php echo mysql_result($query,$i,panduanti);?></td>
    <td><?php echo mysql_result($query,$i,zf);?></td><td width="99" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="103" align="center"><a href="shijuan_detail3.php?sjbh=<?php
		echo mysql_result($query,$i,"bianhao");
	?>">查看答案</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  
</p>
<p align="center"><a href="chengji2.php?pagecurrent=1">首页</a>, <a href="chengji2.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="chengji2.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="chengji2.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

