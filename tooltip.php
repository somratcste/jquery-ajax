<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery UI - Tooltip Widget</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-6">		
		<label title="Your Full Name">Name</label>
		<input class="form-control" type="text" name="" id="textname" title="Your Name Here">
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function tooltipData(){
			return "Data return from function";
		}
		$("#textname").tooltip({
			content: tooltipData(),
			track : true ,
			show : {delay : 100 , duration: 500 , effect : 'slideDown'},
			hide : {delay : 100, duration : 500 , effect : 'slideUp'}
		});
	});
</script>
</body>
</html>

