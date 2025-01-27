<?php
header("Content-type:text/html;charset=utf-8");
 date_default_timezone_set('PRC');
$zh=$_GET['zh'];
$mm=$_GET['mm'];
if($zh==""||$mm==""){
echo "Please enter your account password！";
}else{
if(file_exists("../data/user/".$zh.".php")){
include_once("../data/user/".$zh.".php");
if($mm==$usermm){
echo "Login Successfully！";
echo "<br>account:【".$userzh."】";
echo '<br>remaining:';
 $xzsj=date('U');
 $zcsj=$zcsj;
 $sj=$zcsj-$xzsj;
 $ts=$sj/86400;
 $num = sprintf("%.2f",$ts);
if($ts<0){
 echo '【0】';
 }else{
 echo "【".$num." days】";
}}
else{
echo "Wrong Password!";
}
}else{
echo "Account does not exist！Please sign up and log in。";
}

}
?>