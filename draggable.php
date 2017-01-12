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
	<div class="row col-md-6">	
		<div id="outeroption" class="outerdiv">
			<div id="draggable" class="innerdivision">
				This is draggable widget
			</div>
		</div>
		
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#draggable").draggable({
			containment : 'parent' ,
			cursor : 'move' ,
			opacity : 0.5 ,
			revert : true ,
		});
	});
</script>
</body>
</html>

