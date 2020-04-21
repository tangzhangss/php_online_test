<?php

session_start();
if($_SESSION['cx']!="超级管理员")
{
	echo "<script>javascript:alert('对不起，您没有该权限');history.back();</script>";
	exit;
}


include_once 'conn.php';

	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	
	$sql="select * from allusers where username='$username' and pwd='$pwd'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					
					echo "<script language='javascript'>alert('该用户名已经存在,请换其他用户名！');history.back();</script>";
			}
			else
			{
				//date_default_timezone_set("PRC");
				
				$ndate =date("Y-m-d H:i:s");

					$sql="insert into allusers(username,pwd,cx) values('$username','$pwd','$cx')";
					mysql_query($sql); 
					echo "<script language='javascript'>alert('操作成功！');location.href='yhzhgl.php';</script>";
			}
	 }
	 
	 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>添加新管理员：</p>
<script language="javascript">
	function check()
	{
		if(document.form1.username.value=="")
		{
			alert("请输入用户名");
			document.form1.username.focus();
			return false;
		}
		if(document.form1.pwd1.value=="")
		{
			alert("请输入密码");
			document.form1.pwd1.focus();
			return false;
		}
		if(document.form1.pwd2.value=="")
		{
			alert("请输入确认密码");
			document.form1.pwd2.focus();
			return false;
		}
		if(document.form1.pwd1.value!=document.form1.pwd2.value)
		{
			alert("两次密码不一致，请重试");
			document.form1.pwd1.value="";
			document.form1.pwd2.value="";
			document.form1.pwd1.focus();
			return false;
		}
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    <tr>
      <td>用户名：</td>
      <td><input name="username" type="text" id="username" />
      *
      <input name="addnew" type="hidden" id="addnew" value="1" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input name="pwd1" type="password" id="pwd1" />
      *</td>
    </tr>
    <tr>
      <td>确认密码：</td>
      <td><input name="pwd2" type="password" id="pwd2" />
      *</td>
    </tr>
    
    <tr>
      <td>权限:</td>
      <td><input name="cx" type="radio" value="普通管理员" checked="checked" />
      普通管理员
        <input type="radio" name="cx" value="超级管理员" />
      超级管理员</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" onClick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>已有管理员列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td bgcolor="A4B6D7">序号</td>
    <td bgcolor="A4B6D7">用户名</td>
    <td bgcolor="A4B6D7">密码</td>
    <td bgcolor="A4B6D7">权限</td>
    <td bgcolor="A4B6D7">添加时间</td>
    <td bgcolor="A4B6D7">操作</td>
  </tr>
  <?php
	  $sql="select * from allusers order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
  ?>
  <tr>
    <td><?php
		echo $i+1;
	?></td>
    <td><?php
		echo mysql_result($query,$i,"username");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"pwd");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"cx");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"addtime");
	?></td>
    <td><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=allusers" onClick="return confirm('真的要删除？')">删除</a> </td>
  </tr>
  <?php
  	}
  ?>
</table>
<p>&nbsp; </p>
</body>
</html>
