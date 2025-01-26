<?php
header('Content-Type: text/html; charset=utf-8');
$glmm=$_COOKIE['appyhglosmm'];
$lj="mm.php";
$title='创建卡密';
include './head.php';
$num=$_POST['num'];
$sj=$_POST['sj'];
include_once($lj);
if($glmm==""){
echo "<script>alert('Please enter the password to enter');location='index.php';</script>";

}
else if($glmm==$mm){
}else{
echo "<script>alert('Incorrect password, please log in again');location='index.php';</script>";

}
if($sj=="" && $kmsl==""){
echo <<< EOT

   <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
          <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Add card secret</h3></div>
<div class="panel-body">
<form action="cjkm.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
 <label class="col-sm-2 control-label">Time seconds( 1 day = 86400 seconds)</label>
	  <div class="col-sm-10"><input type="text" name="sj" value="" class="form-control" maxlength="25"/></div>	 	</div><br>
	<div class="form-group">
 <label class="col-sm-2 control-label">Number of generations</label>
	  <div class="col-sm-10"><input type="text" name="num" value="" class="form-control" maxlength="25"/></div>	 	</div><br>
		<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="Create" class="btn btn-primary form-control"/><br/>
	 </div>
	</div></form>
EOT;
}else{
echo "  <br/><br/><div class='col-xs-12 col-sm-10 col-lg-8 center-block' style='float: none;'>
          <div class='panel panel-primary'>
        <div class='panel-heading'><h3 class='panel-title'>Card password added</h3></div>";
function make_password( $length = 10)
{
    //Password character set, you can add any characters you need
    $chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 
    'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's', 
    't', 'u', 'v', 'w', 'x', 'y','z', 'A', 'B', 'C', 'D', 
    'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L','M', 'N', 'O', 
    'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y','Z', 
    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $keys = array_rand($chars, $length); 
    $password = '';
    for($i = 0; $i < $length; $i++)
    {
        
        $password .= $chars[$keys[$i]];
    }
    return $password;
}
for ($i = 0; $i < $num; $i++) { //
$km=make_password(10);
mkdir("data/km/".$km);
$sjlj="data/km/".$km.'/a.txt';
file_put_contents($sjlj,$sj);
echo "   <li class='list-group-item'>Card:$km</li>";
}
echo " 		<br/><div class='form-group'>
	  <div class='col-sm-offset-2 col-sm-10'><a href='./km.php' class='btn btn-primary form-control'/>Enter card secret management</a><br/>
	 </div>
	</div>
</div>";
}
?>