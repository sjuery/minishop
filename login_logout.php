<?php
session_start();
?>

<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box" action="./index.php">
		<h1>
			You were logged out successfully. Please come again, Thank you!
			<BR />
			<BR />
			<?php
			$_SESSION['login'] = "";
			?>
		</h1>
		<input class="button" type="submit" value="Back to main menu" style="color:white"/>
	</form>
</body>
</html>
