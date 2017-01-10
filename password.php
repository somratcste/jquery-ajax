<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Password</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div class="container">
	<div class="row">	
	<div class="col-md-6">	
		<form action="" method="POST">
			<tr>
				<td>User Name : </td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="showpassword" id="showpassword">Show Password</button></td>
			</tr>
		</form>
		<div id ="skillStatus"></div>
	</div>
	</div>
	</div>

<script type="text/javascript" src="src/js/bootstrap.js"></script>
<script type="text/javascript" src="src/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="src/js/password.js"></script>
</body>
</html>

