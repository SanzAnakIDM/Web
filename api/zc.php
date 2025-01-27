<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
$zh=$_GET['zh'];
$mm=$_GET['mm'];
if($zh==""||$mm==""){
echo "Missing submission value";
}else{
if(file_exists("../data/user/".$zh.".php")){
echo "The account exists" ;
}else{
$zcsj=date('U');
$file = fopen('dm.php',"r");
$a = fread($file,filesize('dm.php'));
$as=strtr($a,array("ZH"=>$zh,"MM"=>$mm,"SJ"=>$zcsj));
$fp = fopen("../data/user/".$zh.".php",'w');
fwrite($fp,$as);
fclose($fp);
echo "registration success";
    $ip = $_SERVER['REMOTE_ADDR'];
$time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("123.txt","a") ;
$txt= "$ip"."--Registered--"."$time"."\n";
fputs($fp,$txt);
}
}
?>