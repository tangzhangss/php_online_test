<?php
//数据库链接文件
$host='127.0.0.1';//数据库服务器
$user='***';//数据库用户名
$password='***';//数据库密码
$database='phpzxksxthsg5208';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('数据库连接失败！');

@mysql_select_db($database) or die('没有找到数据库！');
mysql_query("set names 'gb2312'");


function getoption($ntable,$nzd)
{
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>"><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getoption2($ntable,$nzd)
{
	?>
	<option value="">请选择</option>
	<?php
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>" <?php 
				
				if($_GET[$nzd]==mysql_result($query,$fi,0))
				{
					echo "selected";
				}
				?>><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getitem($ntable,$nzd,$tjzd,$ntj)
{
	if($_GET[$tjzd]!="")
	{
		$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			
				echo "value='".mysql_result($query,0,0)."'";
			
		}
	}
}
function makefilename2(){ 
   $i=1; 
   $str = "0123456789";   //   输出字符集
	$n = 4;   //   输出串长度
	$len = strlen($str)-1;
	for($i=0 ; $i<$n; $i++){
	$s .=  $str[rand(0,$len)];
	}
	$timestamp=time(); 
   return $timestamp.$s; 
} 
?>