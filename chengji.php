<?php 
include_once 'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�Ծ�����</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�����ɼ��б���</p>
<form id="form1" name="form1" method="post" action="">
  ����:�Ծ����:
    <input name="bh" type="text" id="bh" />
  ��Ŀ:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="����" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">���</td>
    <td width="360" bgcolor='#EBE2FE'>�Ծ����</td>
    <td width="205" bgcolor='#EBE2FE'>�γ�</td>
    <td width="148" bgcolor='#EBE2FE'>��ѡ��÷�</td>
    <td width="205" bgcolor='#EBE2FE'>�����÷�</td>
    <td width="195" bgcolor='#EBE2FE'>�ж���÷�</td>
    <td width="209" bgcolor='#EBE2FE'>ѧ��</td>
    <td width="120" align="center" bgcolor="#EBE2FE">����ʱ��</td>
  </tr>
  <?php 
    $sql="select * from chengji where 1=1";
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
  $pagelarge=10;//ÿҳ������
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
    <td><?php echo mysql_result($query,$i,danxuanti);?></td>
    <td><?php echo mysql_result($query,$i,tiankongti);?></td>
    <td><?php echo mysql_result($query,$i,panduanti);?></td>
    <td><?php echo mysql_result($query,$i,yonghuming);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��,
  
</p>
<p align="center"><a href="chengji.php?pagecurrent=1">��ҳ</a>, <a href="chengji.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="chengji.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="chengji.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>
