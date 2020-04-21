<?php
//验证登陆信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$yuan=$_GET["yuan"];
	$tablename=$_GET["tablename"];
	if($yuan=="是")
	{
	$sql="update $tablename set issh='否' where id=$id";
	}
	else
	{
	$sql="update $tablename set issh='是' where id=$id";
	}
	 	mysql_query($sql);
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('审核成功！');location.href='$comewhere';</script>";
	
//}
?>