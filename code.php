<?php
session_start();

$code=array("width"=>50,"height"=>25,	"len"=>4,			 
	"char"=>1,"imx"=>8,"imy"=>6,"cookie"=>"regsession_code",
	"value"=>""
);

if($code["char"]==1){
$char=array(0,1,2,3,4,5,6,7,8,9);
}elseif($code["char"]==2){
$char=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
}elseif($code["char"]==3){
	$char=array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
}
for($i=0;$i<$code["len"];$i++){
	$code["value"].=$char[rand(0,count($char)-1)];
}

$_SESSION['regsession_code']=$code["value"];
@header("Content-Type:image/png");

$im=imagecreate($code["width"],$code["height"]);
$back=imagecolorallocate($im,0xff,0xff,0xff);	//背景色
$pix=imagecolorallocate($im,221,241,251);	//模糊点颜色
$font=imagecolorallocate($im,23,162,231);	//字体色
for($i=0;$i<1000;$i++){
	imagesetpixel($im,rand(0,$code["width"]),rand(0,$code["height"]),$pix);
}
 
imagestring($im,5,$code["imx"],$code["imy"],$code["value"],$font);
imagerectangle($im,0,0,$code["width"]-1,$code["height"]-1,$font);
imagepng($im);
imagedestroy($im);

?>