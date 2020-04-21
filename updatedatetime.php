<?php
error_reporting(0); 
mysql_connect("127.0.0.1", "root", "");
$result = mysql_list_tables("phpzxksxthsg5208");

for ($i = 0; $i < mysql_num_rows($result); $i++)
{
	//printf ( mysql_tablename($result, $i)."<br>");
	$sql="select id,addtime from ". mysql_tablename($result, $i)." ";
	 $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($j=0;$j<$rowscount;$j++)
	 {
	 	$tt=date("h:i:s",strtotime(mysql_result($query,$j,"addtime")));
		//echo $tt."<br>";
		$sql="update ".mysql_tablename($result, $i)." set addtime='".date('Y-m-d')." ".$tt."' where id=".mysql_result($query,$j,"id");
		
		
		mysql_query($sql);
	 }
	// echo "<br>";
}


mysql_free_result($result);


echo "ok!";
?>