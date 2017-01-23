<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jquery UI - Jquery UI - Droppabel Widget</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row col-md-12">	
		<div class="box col-md-4">
			PHP & JAVA Framework <hr>
			<ul id="techList">
				<li class="form-control" data-value="php">Codeigniter</li>
				<li class="form-control" data-value="php">Laravel</li>
				<li class="form-control" data-value="php">Cakephp</li>
				<li class="form-control" data-value="java">Spring</li>
				<li class="form-control" data-value="java">Staus 2</li>
				<li class="form-control" data-value="java">Hibernet</li>
			</ul>
		</div>		
		<div class="box col-md-4" id="phpFramework">
			PHP Framework <hr>
			<ul id="php"></ul>
		</div>		
		<div class="box col-md-4" id="javaFramework">
			Java Framework <hr>
			<ul id="java"></ul>
		</div>		
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#techList li").draggable({
			helper : 'clone' , 
			revert : 'invalid'
		});
		$("#phpFramework").droppable({
			accept : 'li[data-value="php"]' ,
			drop : function(event , ui){
				$("#php").append(ui.draggable);
			}
		});
		$("#javaFramework").droppable({
			accept : 'li[data-value="java"]' ,
			drop :  function(event , ui){
				$("#java").append(ui.draggable);
			}
		});
	});
</script>
</body>
</html>

