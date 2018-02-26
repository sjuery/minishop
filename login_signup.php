<?php
session_start();
?>

<html>
<head>
	<title>User Signup</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box" action="create_account.php" method="post">
	<h1>
		Username: <input class="textbox" type="text" name="username"/>
		<br />
		Password: <input class ="textbox" type="password" name="passwd"/>
		<br />
		Re-Password: <input class ="textbox" type="password" name="repass"/>
		<br />
		Name: <input class ="textbox" type="text" name="name"/>
		<br />
		Surname: <input class ="textbox" type="text" name="surname"/>
		<br />
        Home Address: <input class ="textbox" type="text" name="addr"/>
		<br />
		<input class="button" type="submit" value="Finish Signup" style="color:white"/>
	</h1>
	</form>
	<form action="./index.php">
		<input class="button1" type="submit" value="Back To Main Menu" style="color:white">
	</form>
	<form action="./login_user.php">
		<input class="button1" type="submit" value="Sign In" style="color:white">
	</form>
</div>
</body>
</html>
