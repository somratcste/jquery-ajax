<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-6">		
		<form class="form-horizontal" id="myform" action="msg.php" method="post">

		  <div class="form-group">
		    <label class="col-sm-4 control-label">User Name</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Password</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Password Again</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Email</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control">
		    </div>
		  </div>

		  
		  <div class="form-group">
		    <div class="col-sm-offset-4 col-sm-8">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-4 col-sm-8">
		      <button type="submit" class="btn btn-default">Submit</button>
		    </div>
		  </div>
		</form>
	</div>
	</div>

<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/textbox.js"></script>
</body>
</html>

