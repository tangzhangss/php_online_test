<?php
session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线考试系统 - 后台管理面板</title>
<link rel="StyleSheet" href="dtree.css" type="text/css" />
	<script type="text/javascript" src="dtree.js"></script>

<link href="css_admin/admin_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/alogin_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/topleft_skin.css" rel="stylesheet" type="text/css" />
<link href="css_admin/manage_menu.css" rel="stylesheet" type="text/css" />
<link href="css_admin/newdiv_window.css" rel="stylesheet" type="text/css" />

</head>



<body class="menu_body" >

<base target="frame_main" />
<div class="amanagemenu_div">
  <div class="Left_NavTop"></div>
  <span class="mmenu_title2">网站栏目</span>
  
  
  
  <div class="dtree">

	<script type="text/javascript">
		d = new dTree('d');

		d.add(0,-1,'');
		d.add(1,0,'authority','','个人资料管理 ',"","","","","","","","open");
		d.add(2,0,'authority','','考试管理 ');
		

		d.add(12,1,'authority','','个人资料管理 ',"","","xueshengxinxi_updt2.php");

		d.add(12,2,'authority','','在线考试 ',"","","shijuanshengcheng_list2.php");
		d.add(13,2,'authority','','我的考试成绩 ',"","","chengji2.php");

		document.write(d);
		
	</script>

</div>
  <span class="mmenu_title2">版权所有</span>
  <p style="padding-left:10px;">在线考试系统 <br />开发日期：<?php echo date("Y-m-d")?><br />联系电话：xxxxxxx</p>
</div>
</body>
</html>