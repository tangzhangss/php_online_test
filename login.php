<?php
//验证登陆信息
session_start();

include_once 'conn.php';

	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$cx=$_POST['cx'];
	$yzm=$_POST['yzm'];

	//$userpass=md5($userpass);
	if($login=="1")
	{
		if($yzm==$_SESSION['regsession_code'])
		{
		
		}
		else
		{
			echo "<script language='javascript'>alert('请输入正确验证码！');location.href='login.html';</script>";
			die;
		}
		if ($username!="" && $pwd!="" && $yzm!="")
		{
		if($cx=="管理员"){$sql="select * from allusers where username='$username' and pwd='$pwd'";}
		if($cx=="学生"){$sql="select * from xueshengxinxi where yonghuming='$username' and mima='$pwd'";}
		if($cx=="教师"){$sql="select * from jiaoshixinxi where gonghao='$username' and mima='$pwd'";}

		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					if($cx=="管理员"){
						$_SESSION['cx']=mysql_result($query,0,"cx");
					}
					else
					{
						$_SESSION['cx']=$cx;
					}
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('登陆成功！');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	}
	
//}
?>


