<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery UI - Menu Widget</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-6">	
		<label>Select Price</label>
		<input type="text" id="amount" readonly style="font-weight: bold;color: green;margin-bottom: 20px;">
		<div id="slider"></div>
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slider").slider({
			value : 100 ,
			min : 0 ,
			max : 500 , 
			step :  50 ,
			slide : function(event , ui) {
				$("#amount").val("Tk. "+ui.value);
			}
		});
		$("#amount").val("Tk. "+$("#slider").slider("value"));
	});
</script>
</body>
</html>

