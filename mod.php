<?php
session_start();
include_once 'conn.php';
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['xmm1'];
	$pwdy=$_POST['ymm'];
	$sql="select * from allusers where username='".$_SESSION['username']."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					if(mysql_result($query,0,"pwd")==$pwdy)
					{
					$sql="update allusers set pwd='$pwd' where username='".$_SESSION['username']."'";
					$query=mysql_query($sql);
					echo "<script language='javascript'>alert('修改成功！');history.back();</script>";
					}
					else
					{
					echo "<script language='javascript'>alert('对不起,原密码不正确！');history.back();</script>";
					}
			}
			else
			{
					echo "<script language='javascript'>alert('对不起,原密码不正确！');history.back();</script>";
			}
	 }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改密码</title>
</head>
<script>
function check()
{
	if(document.form1.ymm.value=="")
	{
		alert("请输入原密码");
		document.form1.ymm.focus();
		return false;
	}
	if(document.form1.xmm1.value=="")
	{
		alert("请输入新密码");
		document.form1.xmm1.focus();
		return false;
	}
	if(document.form1.xmm2.value=="")
	{
		alert("请输入确认密码");
		document.form1.xmm2.focus();
		return false;
	}
	if (document.form1.xmm1.value!=document.form1.xmm2.value)
	{
		alert("对不起，两次密码不一至，请重新输入");
		document.form1.xmm1.value="";
		document.form1.xmm2.value="";
		document.form1.xmm1.focus();
		return false;
	}
}

</script>
<body>

<form id="form1" name="form1" method="post" action="mod.php">
  <table width="41%" height="126" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="9DC9FF" style="border-collapse:collapse">
    <tr>
      <td colspan="2"><div align="center">修改密码</div></td>
    </tr>
    <tr>
      <td>原密码：</td>
      <td><input name="ymm" type="text" id="ymm" />
      <input name="addnew" type="hidden" id="addnew" value="1"></td>
    </tr>
    <tr>
      <td>新密码：</td>
      <td><input name="xmm1" type="password" id="xmm1" /></td>
    </tr>
    <tr>
      <td>确认密码：</td>
      <td><input name="xmm2" type="password" id="xmm2" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="确定" onClick="return check()" /></td>
      <td><input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>

