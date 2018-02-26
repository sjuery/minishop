<?php
session_start();
?>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<?php echo $_SESSION['login_ret']; $_SESSION['ogin_ret'] = ""; ?>
	<form class="box" action="login.php" method="post">
	<h1>
		UserName: <input class="textbox" type="text" name="username"/><BR />
		Password: <input class ="textbox" type="password" name="passwd"/><BR />
		<input class="button" type="submit" value="Login" style="color:white"/>
	</h1>
	</form>
	<form action="./index.php">
		<input class="button1" type="submit" value="Back To Main Menu" style="color:white">
	</form>
	<form action="./login_signup.php">
		<input class="button1" type="submit" value="Sign Up" style="color:white">
	</form>
</body>
</html>
