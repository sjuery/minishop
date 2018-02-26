<?php
session_start();
?>

<html>
<head>
	<title>Edit Users</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box" action="admin.php" method="post">
		<h1>
			User Edit
		</h1>
		<?php
		foreach ($_SESSION['account'] as $account)
		{
			echo "
			<h1>
			<input class=\"button\" type=\"submit\" value=\"Delete User - ".$account['username']."\" style=\"color:white\">
			</h1>
			<br />
			";
		}
		?>
	</form>
	<form action="./index.php">
		<input class="button1" type="submit" value="Back To Main Menu" style="color:white">
	</form>
</body>
</html>
