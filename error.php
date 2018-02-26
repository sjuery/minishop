<html>
<head>
	<title>Error</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<form class="box">
	<h1>
		Something went wrong, please try again.<BR />
		<?php
			echo "Error message: $_SESSION[\'error\']";
			$_SESSION['error'] = "";
		 ?>
		<input class="button" type="submit" value="Try Again" style="color:white"/>
	</h1>
	</form>
</body>
</html>
