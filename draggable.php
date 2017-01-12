<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery UI - Draggable Widget Option</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-8">	
		<div class="innerdivision" style="background: red;">Red</div>
		<div class="innerdivision" style="background: green;">Green</div>
		<div class="innerdivision" style="background: yellow;">Yellow</div>
		<div class="innerdivision" style="background: blue;">Blue</div>
		<div class="innerdivision" style="background: orange;">Orange</div><br>
		<div id="outeroption" class="outerdiv"></div>		
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("div").draggable({
			snap : '#outeroption',
			snapTolerance : 50 ,
			cancel : '#outeroption'
		});
	});
</script>
</body>
</html>

