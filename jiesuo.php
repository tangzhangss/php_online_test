<?php
session_start();
include_once 'conn.php';
	
	$sql="select * from allusers where username='".$_SESSION['username']."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					if(mysql_result($query,0,"pwd")==$_POST["suopinmima"])
					{
					
						echo "<script>javascript:location.href='suoping.php?js=1';</script>";
					}
					else
					{
					echo "<script language='javascript'>alert('对不起,密码不正确！');location.href='suoping.php';</script>";
					}
			}
			else
			{
					echo "<script language='javascript'>alert('对不起,原密码不正确！');location.href='suoping.php';</script>";
			}
	
?>




