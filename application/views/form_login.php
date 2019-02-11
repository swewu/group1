
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<script src="main.js"></script>
</head>
<body>
	<form action="<?php echo site_url('Welcome/checkLogin') ?>" method="get">
	<input type="text" name="id" placeholder="id" required>
	<input type="text" name="password" placeholder="password" required>
	<input type="submit" value="Login"></form>
</form>
</body>
</html>