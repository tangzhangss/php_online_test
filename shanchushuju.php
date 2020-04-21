<?php
error_reporting(0); 
session_start();
include_once 'conn.php';
$delsjb=$_POST["delsjb"];
	if($delsjb=="1")
	{
		$tablename=$_POST['tablename'];
		
		$sql="delete from $tablename";
		$query=mysql_query($sql);
		echo "<script language='javascript'>alert('删除成功！');history.back();</script>";
						
	 }
?>
<form id="form1" name="form1" method="post" action="">
  <table width="41%" height="141" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="9DC9FF" style="border-collapse:collapse">
    <tr>
      <td height="35" colspan="2"><div align="center">清空数据表</div></td>
    </tr>
    <tr>
      <td width="31%">请选择您要清空的表：</td>
      <td width="69%"><select name="tablename" id="tablename">
	  <?php
//验证登陆信息


//mysql_connect("127.0.0.1", "root", "");
$result = mysql_list_tables($database);

for ($i = 0; $i < mysql_num_rows($result); $i++)
{
	if(mysql_tablename($result, $i)=="allusers")
	{}
	else
	{
	?>
		<option value="<?php echo mysql_tablename($result, $i)?>"><?php echo mysql_tablename($result, $i)?></option>
	<?php
	}
	
}


mysql_free_result($result);
	
//}
?>
              </select>
        <input name="delsjb" type="hidden" id="delsjb" value="1" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" class="hsgbutton" onclick="return check()" value="一键清空" /></td>
    </tr>
  </table>
</form>
