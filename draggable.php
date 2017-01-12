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
		<div id="imgheight"></div><br>
		<div id="imgwidth"></div><br>
		<div id="state"></div><br>
		<img id="liveimg" src="src/img/somrat.jpg" height="40%" width="40%">
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#imgheight , #imgwidth").slider({
			min : 100 , 
			max : 500 , 
			slide : controlImg ,
		});
		function controlImg(){
			var height = $("#imgheight").slider("value");
			var width = $("#imgwidth").slider("value");
			$("#liveimg").css({
				height : height , 
				width : width
			});
			$("#state").html("height : "+height+" px"+"<br>"+
							 "width : "+width+" px");
		}
	});
</script>
</body>
</html>

