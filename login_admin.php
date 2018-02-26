<?php
session_start();
?>

<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box" action="admin.php" method="post">
	<h1>
		Admin: <input class="textbox" type="text" name="username"/><BR />
		Password: <input class ="textbox" type="password" name="passwd"/><BR />
		<input class="button" type="submit" value="Login As Admin" style="color:white"/>
	</h1>
	</form>
	<form>
		<input class="button1" type="submit" value="Back To Main Menu" style="color:white">
	</form>
</body>
</html>
