<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery UI - Ranger Slider</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-6">	
		<strong>Amount :</strong> <span id="state"></span><br><br>
		<div id="slider"></div> <br>
		<label>Maximum Amount</label>
		<input class="form-control" type="text" id="maxValue"><br>
		<label>Minimum Amount</label>
		<input class="form-control" type="text" id="minValue">
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var getOutput = $("#state");
		var getSlider = $("#slider");
		getSlider.slider({
			values : [20 , 40] ,
			range : true,
			min : 10 , 
			max : 100 ,
			step : 5 ,
			slide : function(event , ui){
				getOutput.html(ui.values[0]+'-'+ui.values[1]+' Tk. ');
				$("#minValue").val(ui.values[0]);
				$("#maxValue").val(ui.values[1]);
			} 
		}); 
		getOutput.html(getSlider.slider("values",0)+'-'+getSlider.slider("values",1)+" Tk.");
		$("#minValue").val(getSlider.slider("values",0));
		$("#maxValue").val(getSlider.slider("values",1));

	});
</script>
</body>
</html>

