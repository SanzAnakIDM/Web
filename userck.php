<?php
header('Content-Type: text/html; charset=utf-8');
$glmm=$_COOKIE['appyhglosmm'];
$lj="mm.php";
include_once($lj);
if($glmm==""){
echo "<script>alert('Please enter the password to enter');location='index.php';</script>";

}
else if($glmm==$mm){
echo <<<EOF
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1"/>
 <title>User Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>  
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="./zjm.php">APP user management system</a>
      </div>
    </div>
  </nav>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">User view</h3></div>
        <div class="panel-body">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>account</th>
			<th>password</th>
			<th>remaining</th>
    <th>operating</th>
		</tr>
	</thead>
	<tbody>
EOF;
$hp=scandir("data/user");
$arrlength=count($hp);
for($x=2;$x<$arrlength;$x++)
{
$a=$hp[$x];
include_once("data/user/".$a);
$xzsj=date('U');
$zcsj=$zcsj;
 $sj=$zcsj-$xzsj;
 $ts=$sj/86400;
 $num = sprintf("%.2f",$ts);
if($num<0){
 $num=0;
 }
echo '<tr>
			<td>'.$userzh.'</td>
			<td>'.$usermm.'</td>
			<td>'.$num.' day</td>
			<td><a href=./scyh.php?userzh='.$userzh.'>delete</td>
		</tr>';
}
echo '	</tbody>
</table>';
}
else{
echo "<script>alert('Wrong password, please re-enter');location='index.php';</script>";

}

?>