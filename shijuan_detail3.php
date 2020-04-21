<?php 
include_once 'conn.php';
$sjbh=$_GET["sjbh"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>单选题</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<?php
$sql="select * from shijuanshengcheng where bianhao='".$sjbh."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<p>试卷编号：<?php echo mysql_result($query,$i,bianhao)?></p>
<table bgcolor="#ffffff" border="0" cellspacing="0" 
                              height="203" width="100%">
  <tbody>
    <tr>
      <td><form action="" method="post" name="form1" id="form1">
        <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
          <tr>
            <td height="33" colspan="3">选择题</td>
          </tr>
         <?php
$sql2="select * from danxuanti where id in (".mysql_result($query,$i,danxuanti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
          <tr>
            <td width="9%" height="33">试题：</td>
            <td colspan="2">题目：<?php echo mysql_result($query2,$i2,timu)?>
                  <input name="xztshitida<?php echo mysql_result($query2,$i2,id)?>" type="hidden" id="xztshitida<?php echo mysql_result($query2,$i2,id)?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /> 
                  <font color=red><strong>标准答案：<?php echo mysql_result($query2,$i2,daan)?></strong></font> </td>
          </tr>
          <tr>
            <td rowspan="2">选项</td>
            <td width="52%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="A" />
              选项A：<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="B" />
              选项B：<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="C" />
              选项C：<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="D" />
              选项D：<?php echo mysql_result($query2,$i2,xuanxiangD)?></td>
          </tr>
         <?php
		 }
	}
?> 
        </table>
		
		 
         <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
           <tr>
             <td height="33" colspan="3">填空题</td>
           </tr>
           <?php
$sql2="select * from tiankongti where id in (".mysql_result($query,$i,tiankongti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
           <tr>
             <td width="9%" height="33">试题：</td>
             <td colspan="2">题目：<?php echo mysql_result($query2,$i2,timu)?>
                 <input name="dxtshitida<?php echo $i2?>" type="hidden" id="dxtshitida<?php echo $i2?>" value="<?php echo mysql_result($query2,$i2,daan)?>" />
              <font color="red"><strong>标准答案：<?php echo mysql_result($query2,$i2,daan)?></strong></font></td>
           </tr>
           <tr style="display:none">
             <td>您的答案：</td>
             <td colspan="2"><input name="dxtxxa<?php echo $i2?>" type="text" id="dxtxxa<?php echo $i2?>" /></td>
           </tr>
           <?php
		 }
	}
?>
         </table>
         <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
           <tr>
             <td height="33" colspan="3">判断题</td>
           </tr>
           <?php
$sql2="select * from panduanti where id in (".mysql_result($query,$i,panduanti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
           <tr>
             <td width="9%" height="33">试题：</td>
             <td colspan="2">题目：<?php echo mysql_result($query2,$i2,timu)?>
                 <input name="xztshitida<?php echo mysql_result($query2,$i2,id)?>2" type="hidden" id="xztshitida<?php echo mysql_result($query2,$i2,id)?>2" value="<?php echo mysql_result($query2,$i2,daan)?>" />
              <font color="red"><strong>标准答案：<?php echo mysql_result($query2,$i2,daan)?></strong></font></td>
           </tr>
           <tr>
             <td>答案：</td>
             <td colspan="2"><input type="radio" name="pdtxxa<?php echo mysql_result($query2,$i2,id)?>" value="对" />
               对
               <input type="radio" name="pdtxxa<?php echo mysql_result($query2,$i2,id)?>" value="错" />
               错</td>
           </tr>
           <?php
		 }
	}
?>
         </table>
         <input name="jj" type="hidden" id="jj" value="1" />
      </form>
          <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
<?php
	}
?>
</body>
</html>

