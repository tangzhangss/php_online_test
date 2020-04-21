<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<html>
<head>
<title>内容详细</title>
<LINK href="css.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {
	color: #0066FF;
	font-weight: bold;
}
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE7 {color: #993300; font-weight: bold; }
-->
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="98%" height="230" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
  <tr>
    <td width="100%" height="44" background="qtimages/1_02_01_02_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="bottom"><span class="STYLE1">内容详细</span></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table id="__01" width="100%" height="177" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" height="718" valign="top"><?php 
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
              <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
                <tr>
                  <td height="33" align="center"><span class="STYLE7"><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</span></td>
                </tr>
                <tr>
                  <td height="104"><?php echo mysql_result($query,0,"neirong");?></td>
                </tr>
                <tr>
                  <td align="right"><a onClick="javascript:history.back();" style="cursor:pointer">返回</a></td>
                </tr>
              </table>
          <?php
					}
					?>        </td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>