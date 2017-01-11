<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Auto Save Data</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row">	
	<div class="col-md-6">	
		<form action="" method="post">
			<tr>
				<td>Content : </td>
				<td><textarea type="text" name="content" id="content"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="contentID" id="contentID"></td>
			</tr>
		</form>
		<div id ="saveStatus"></div>
	</div>

	</div>
	</div>

<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/autosave.js"></script>
</body>
</html>

