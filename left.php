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
		d.add(1,0,'authority','','系统用户管理 ',"","","","","","","","open");
		d.add(2,0,'authority','','学生信息管理 ');
		d.add(3,0,'authority','','课程信息管理 ');
		d.add(4,0,'authority','','试题库管理 ');
		d.add(5,0,'authority','','试卷管理 ');
		d.add(6,0,'authority','','成绩管理 ');

		d.add(12,1,'authority','','修改密码 ',"","","mod.php");
		d.add(13,1,'authority','','管理员用户 ',"","","yhzhgl.php");
		d.add(14,1,'authority','','教师信息添加 ',"","","jiaoshixinxi_add.php");
		d.add(15,1,'authority','','教师信息查询 ',"","","jiaoshixinxi_list.php");
		
		d.add(12,2,'authority','','学生信息添加 ',"","","xueshengxinxi_add.php");
		d.add(13,2,'authority','','学生信息查询 ',"","","xueshengxinxi_list.php");
				
		d.add(12,3,'authority','','课程信息添加 ',"","","kechengxinxi_add.php");
		d.add(13,3,'authority','','课程信息查询 ',"","","kechengxinxi_list.php");
		
		d.add(12,4,'authority','','选择题添加 ',"","","danxuanti_add.php");
		d.add(13,4,'authority','','选择题查询 ',"","","danxuanti_list.php");
		d.add(14,4,'authority','','判断题添加 ',"","","panduanti_add.php");
		d.add(15,4,'authority','','判断题查询 ',"","","panduanti_list.php");
		d.add(16,4,'authority','','填空题添加 ',"","","tiankongti_add.php");
		d.add(17,4,'authority','','填空题查询 ',"","","tiankongti_list.php");
		
		d.add(12,5,'authority','','试卷生成 ',"","","shijuanshengcheng_add.php");
		d.add(13,5,'authority','','试卷查看 ',"","","shijuanshengcheng_list.php");
		
		d.add(12,6,'authority','','成绩查看 ',"","","chengji.php");

		document.write(d);
		
	</script>

</div>
  <span class="mmenu_title2">版权所有</span>
  <p style="padding-left:10px;">在线考试系统 <br />开发日期：<?php echo date("Y-m-d")?><br />联系电话：xxxxxxx</p>
</div>
</body>
</html>