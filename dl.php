<?php
header("Content-type:text/html;charset=utf-8");
$glmm=$_POST['mm'];
if($glmm==""){
echo "Please enter your account password！";
}else{
$lj="mm.php";
include_once($lj);
if($glmm==$mm){
echo "Login Successfully！" ;
setcookie("appyhglosmm",$mm, time()+3600*24);
header("Location:zjm.php");
}else{
echo "Wrong Password!" ;
}
}

?>