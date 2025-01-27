<?php
header("Content-type:text/html;charset=utf-8");
 date_default_timezone_set('PRC');
$zh=$_GET['zh'];
$km=$_GET['km'];
if($zh==""||$km==""){
echo "请输入账号和卡密！";
}
else{
if(file_exists("../data/km/".$km."/a.txt")){
include_once("../data/user/".$zh.".php");
$sj=file_get_contents("../data/km/".$km."/a.txt");
$zh=$userzh;
$mm=$usermm;
$xgt=$sj+$zcsj;
$file = fopen('dm.php',"r");
$a = fread($file,filesize('dm.php'));
$as=strtr($a,array("ZH"=>$zh,"MM"=>$mm,"SJ"=>$xgt));
$fp = fopen("../data/user/".$zh.".php",'w');
fwrite($fp,$as);
fclose($fp);
del('../data/km/'.$km);
}
else
  {  $ip = $_SERVER['REMOTE_ADDR'];
$time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("123.txt","a") ;
$txt= "$ip"."--Suspect Crack--"."$time"."\n";
fputs($fp,$txt);
}
{
echo "No card secret";
}
}

function del($dirName){
    if(is_dir($dirName)){
        if ( $handle = opendir( "$dirName" ) ) {  
          while ( false !== ( $item = readdir( $handle ) ) ) {  
              if ( $item != "." && $item != ".." ) {  
                  if ( is_dir( "$dirName/$item" ) ) {  
                      del_DirAndFile( "$dirName/$item" );  
                  } else {  
                      if( unlink( "$dirName/$item" ) )
 "Successfully Used ";  
                  }  
              }  
          } 

      closedir( $handle );  
     if( rmdir( $dirName ) ) echo "Successfully Used ";  
        }
    }
}
  {  $ip = $_SERVER['REMOTE_ADDR'];
$time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("123.txt","a") ;
$txt= "$ip"."--Use card secret ip--"."$time"."\n";
fputs($fp,$txt);
}
?>
