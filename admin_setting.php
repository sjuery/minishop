<?php
session_start();
?>

<html>
<head>
	<title>Admin Setting</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<div class="box">
	<form action="admin_item.php" method="post">
		<input class="button" type="submit" value="Edit Item" style="color:white"/>
	</form>
	<form action="admin_user.php" method="post">
		<input class="button" type="submit" value="Edit User" style="color:white"/>
	</form>
	<form action="admin_logout.php" method="post">
		<input class="button" type="submit" value="Logout" style="color:white"/>
	</form>
	</div>
</body>
</html>
