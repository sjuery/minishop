<?php
session_start();
?>

<html>
<head>
	<title>Error</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box" action="./index.php">
	<h1>
		Something went wrong, please try again.<BR />
		<?php
			echo "Error message: ".$_SESSION['error']."<BR />";
			$_SESSION['error'] = "";
		 ?>
		<input class="button" type="submit" value="Back to main menu" style="color:white"/>
	</h1>
	</form>
</body>
</html>
