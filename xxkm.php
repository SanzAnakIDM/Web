<?php
$zh=$_POST['zh'];
$sj=$_POST['sj'];
$t=$_POST['t'];
if($t=="Delete")
{
$lj="data/km/".$zh;
del_DirAndFile($lj);
}
elseif($t=="Modify")
{
$sjlj="data/km/".$zh."/a.txt";
file_put_contents($sjlj,$sj);
echo "<script>alert('Successfully modified!');location='km.php';</script>";
}
else
{}
function del_DirAndFile($dirName){
    if(is_dir($dirName)){
        echo "<br /> ";
        if ( $handle = opendir( "$dirName" ) ) {  
          while ( false !== ( $item = readdir( $handle ) ) ) {  
              if ( $item != "." && $item != ".." ) {  
                  if ( is_dir( "$dirName/$item" ) ) {  
                      del_DirAndFile( "$dirName/$item" );  
                  } else {  
                      if( unlink( "$dirName/$item" ) )echo "User files deleted : $dirName/$item<br /> ";  
                  }  
              }  
          }  
      closedir( $handle );  
     if( rmdir( $dirName ) ) echo "User deleted: $dirName<br /> ";  
echo "<script>alert('successfully deleted!');location='km.php';</script>";
        }
    }
}
?>