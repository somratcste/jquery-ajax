<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Refresh Div Content</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row">	
	<div class="col-md-6">	
		<form action="" method="POST">
			<tr>
				<td>Content : </td>
				<td><textarea name="body" id="body"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="autosubmit" id="autosubmit">Post</button></td>
			</tr>
		</form>
		<div id ="autoStatus"></div>
	</div>
	</div>
	</div>

<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/refresh.js"></script>
</body>
</html>

