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
		<div class="menustyle">	
			<ul id="menu">
				<li>Website Design
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>Jquery</li>
					</ul>
				</li>
				<li>Website Development
					<ul>
						<li>PHP</li>
						<li>JAVA
							<ul>
								<li>JSP</li>
								<li>JSF</li>
								<li>Spring</li>
							</ul>
						</li>
						<li>PYTHON</li>
					</ul>
				</li>
				<li class="ui-state-disabled">SEO</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
	</div>
<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#menu").menu();
	});
</script>
</body>
</html>

