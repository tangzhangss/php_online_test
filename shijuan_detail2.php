<?php 
include_once 'conn.php';
session_start();
$id=$_GET["id"];
$jj=$_POST["jj"];
if ($jj=="1" )
{
	
	$sql="select * from shijuanshengcheng where id=".$id;
	
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	$cj=0;
	 $sql2="select * from danxuanti where id in (".mysql_result($query,$i,danxuanti).")";
	$query2=mysql_query($sql2);
	$rowscount2=mysql_num_rows($query2);
	if($rowscount2>0)
	{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
	 	
		 if ($_POST["xztxxa".$i2]==$_POST["xztshitida".$i2]) 
		 {
		 	
			$cj=$cj+mysql_result($query,0,danxuanfenzhi);
		 }
		 else
		 {
		 	$sqltmp="insert into cuotijilu(username,cuotiid,lb) values('".$_SESSION["username"]."','".mysql_result($query2,$i2,id)."','��ѡ��')";
			
		 	mysql_query($sqltmp);
			
		 }
	 }
	 
	 }
	 $cj2=0;
	  $sql2="select * from tiankongti where id in (".mysql_result($query,$i,tiankongti).")";
	$query2=mysql_query($sql2);
	$rowscount2=mysql_num_rows($query2);
	if($rowscount2>0)
	{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
	 	
		 if ($_POST["dxtxxa".$i2]==$_POST["dxtshitida".$i2]) 
		 {
		 	
			$cj2=$cj2+mysql_result($query,0,tiankongfenzhi);
		 }
		 else
		 {
		 	$sqltmp="insert into cuotijilu(username,cuotiid,lb) values('".$_SESSION["username"]."','".mysql_result($query2,$i2,id)."','�����')";
			
		 	mysql_query($sqltmp);
		 }
	 }
	 
	 }
	 
	 $cj3=0;
	  $sql3="select * from panduanti where id in (".mysql_result($query,$i,panduanti).")";
	 
	$query3=mysql_query($sql3);
	$rowscount3=mysql_num_rows($query3);
	
	if($rowscount3>0)
	{
	 for($i2=0;$i2<$rowscount3;$i2++)
	 {
	 	
		 if ($_POST["pdtxxa".$i2]==$_POST["pdtshitida".$i2]) 
		 {
		 	echo $_POST["pdtxxa".$i2];
			echo $_POST["pdtshitida".$i2];
			$cj3=$cj3+mysql_result($query,0,panduanfenzhi);
		 }
		 else
		 {
		 	$sqltmp2="insert into cuotijilu(username,cuotiid,lb) values('".$_SESSION["username"]."','".mysql_result($query3,$i2,id)."','�ж���')";
			
		 	mysql_query($sqltmp2);
		 }
	 }
	 
	 }
	 
	 $zf=$cj+$cj2+$cj3;
	$sql="insert into chengji(yonghuming,danxuanti,tiankongti,panduanti,zf,bianhao,kemu) values('".$_SESSION["username"]."',".$cj.",".$cj2.",".$cj3.",".$zf.",'".mysql_result($query,$i,bianhao)."','".mysql_result($query,$i,kemu)."')";
	mysql_query($sql);
	echo "<script>javascript:alert('�����ɹ�!�����γɼ�Ϊ����ѡ��".$cj."�֣������".$cj2."�֣��ж���".$cj3."���ܷ�".$zf."��!');location.href='chengji2.php';</script>";
	 
	 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѡ��</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<?php

$sql="select * from shijuanshengcheng where id=".$id;

$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);

if($rowscount>0)
{
?>
<p>�Ծ���ţ�<?php echo mysql_result($query,0,bianhao)?>���γ̣�<?php echo mysql_result($query,0,kemu)?> ʱ�䣺1Сʱ�����ڿ�ʼ��ʱ��ʣ��<SPAN id=tiao></SPAN>�� </p>
<SCRIPT language=javascript>
<!--
function clock(){i=i-1
document.getElementById('tiao').innerHTML=i;
if(i>0) {
setTimeout("clock();",1000);
}
else {

alert("����ʱ�䵽��ϵͳ�Զ�������");
document.form1.submit();
}
}
var i=3600
clock()
//-->
</SCRIPT>
<table bgcolor="#ffffff" border="0" cellspacing="0" 
                              height="203" width="100%">
  <tbody>
    <tr>
      <td><form action="?id=<?php echo $id?>" method="post" name="form1" id="form1">
        <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
          <tr>
            <td height="33" colspan="3">��ѡ��</td>
          </tr>
         <?php
$sql2="select * from danxuanti where id in (".mysql_result($query,0,danxuanti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
          <tr>
            <td width="9%" height="33">���⣺</td>
            <td colspan="2">��Ŀ��<?php echo mysql_result($query2,$i2,timu)?>
                  <input name="xztshitida<?php echo $i2?>" type="hidden" id="xztshitida<?php echo $i2?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /></td>
          </tr>
          <tr>
            <td rowspan="2">ѡ��</td>
            <td width="52%"><input type="radio" name="xztxxa<?php echo $i2?>" value="A" />
              ѡ��A��<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%"><input type="radio" name="xztxxa<?php echo $i2?>" value="B" />
              ѡ��B��<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td><input type="radio" name="xztxxa<?php echo $i2?>" value="C" />
              ѡ��C��<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td><input type="radio" name="xztxxa<?php echo $i2?>" value="D" />
              ѡ��D��<?php echo mysql_result($query2,$i2,xuanxiangD)?></td>
          </tr>
         <?php
		 }
	}
?> 
        </table>
		
		 <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
          <tr>
            <td height="33" colspan="3">�����</td>
          </tr>
         <?php
$sql2="select * from tiankongti where id in (".mysql_result($query,0,tiankongti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
          <tr>
            <td width="9%" height="33">���⣺</td>
            <td colspan="2">��Ŀ��<?php echo mysql_result($query2,$i2,timu)?>
                  <input name="dxtshitida<?php echo $i2?>" type="hidden" id="dxtshitida<?php echo $i2?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /></td>
          </tr>
          <tr>
            <td>���Ĵ𰸣�</td>
            <td colspan="2"><input name="dxtxxa<?php echo $i2?>" type="text" id="dxtxxa<?php echo $i2?>" /></td>
            </tr>
          
         <?php
		 }
	}
?>
        </table>
		 <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
           <tr>
             <td height="33" colspan="3">�ж���</td>
           </tr>
           <?php
$sql3="select * from panduanti where id in (".mysql_result($query,0,panduanti).")";

$query3=mysql_query($sql3);
$rowscount3=mysql_num_rows($query3);
if($rowscount3>0)
{
	 for($i2=0;$i2<$rowscount3;$i2++)
	 {
?>
           <tr>
             <td width="9%" height="33">���⣺</td>
             <td colspan="2">��Ŀ��<?php echo mysql_result($query3,$i2,timu)?>
                 <input name="pdtshitida<?php echo $i2?>" type="hidden" id="pdtshitida<?php echo $i2?>" value="<?php echo mysql_result($query3,$i2,daan)?>" /></td>
           </tr>
           <tr>
             <td>���Ĵ𰸣�</td>
             <td colspan="2"><input type="radio" name="pdtxxa<?php echo $i2?>" value="��" />
��
  <input type="radio" name="pdtxxa<?php echo $i2?>" value="��" />
��</td>
           </tr>
           <?php
		 }
	}
?>
         </table>
		 <input type="submit" name="Submit" value="����" />
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

                          </td>
                          <td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	
</table>
</body>
</html>
