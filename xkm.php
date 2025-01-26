<?php
echo '<div class="panel-body">
  <form action="xxkm.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">';
$zh=$_POST['t'];
echo   '<label class="col-sm-2 control-label">the card secret :</label>';
echo ' <div class="col-sm-10"><input type="text" name="zh" value='.$zh.' class="form-control" maxlength="15"/></div><br/>';
$mmlj="data/km/".$zh."/a.txt";
$mm=file_get_contents($mmlj);
echo   '<label class="col-sm-2 control-label">Time(seconds)</label>';
echo ' <div class="col-sm-10"><input type="text" name="sj" value='.$mm.' class="form-control" maxlength="15"/></div><br/>';
echo '	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="t" value="Modify" class="btn btn-primary form-control"/><br/>';

echo '<div class="panel-body">
  <form action="xxkm.php" method="post" class="form-horizontal" role="form">	<div class="form-group">';
echo '	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="t" value="Delete" class="btn btn-primary form-control"/><br/>';
?>




<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Card secret management</title>
  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>