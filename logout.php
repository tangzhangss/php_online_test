<?php
//注销登录
session_start();
$_SESSION['username']="";
$_SESSION['cx']="";

echo "<script language='javascript'>alert('注销登录成功！');location='login.html';</script>";
?>