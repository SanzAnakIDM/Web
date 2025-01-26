<?php
header("Content-type:text/html;charset=utf-8");
$glmm=$_COOKIE['appyhglosmm'];
$userzh=$_GET['userzh'];
if ($glmm=="")
{
echo "<script>alert('Please enter the password to continue');location='index.php';</script>";
}else{
$lj="mm.php";
include_once($lj);
if($glmm==$mm){
if($userzh==""){
echo "Account missing";
}else{
if (file_exists("data/user/".$userzh.".php")) {
unlink("data/user/".$userzh.".php");
echo "<script>alert('User deleted successfully!');location='userck.php';</script>";
} else {
echo "<script>alert('User does not exist');location='userck.php';</script>";
}
}
}else{
echo "<script>alert('Wrong password, please re-enter');location='index.php';</script>";
}
}
?>