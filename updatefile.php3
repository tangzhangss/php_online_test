<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; 
charset=gb2312"> 
<title>处理上载文件</title> 
</head> 
<body> 
<? 
copy($userfile, "newfilename"); 
echo $userfile." - 用户上传到服务器上的文件临时存放的名称<br>"; 
echo $userfile_name." - 在用户机器上该文件的原始名称<br>"; 
echo $userfile_size." - 上传文件的实际字节数<br>"; 
echo $userfile_type." - 如果用户的浏览器提供了这个信息的话， 
它表示mime的类型。例如 
image/gif<br>"; 
?> 
</body> 
</html>  