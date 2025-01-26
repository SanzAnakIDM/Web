<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>User Management System</title>
  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

   <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
	 <body>

<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">Enter the management page</h3></div>
<div class="panel-body">
  <form action="dl.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">Please enter password</label>
	  <div class="col-sm-10"><input type="text" name="mm" value="" class="form-control" maxlength="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"/></div><br/>
	</div><br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="jr" value="Enter the management page" class="btn btn-primary form-control"/>
