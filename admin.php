<?php
session_start();
foreach ($_SESSION['admin'] as $admin)
{
	if ($admin['username'] === $_POST['username'])
	{
		if ($admin['passwd'] === $_POST['passwd'])
		{
			$_SESSION['login'] = $_POST['username'];
			header('Location: admin_setting.php');
			exit ;
		}
		else
		{
			$_SESSION['error'] = "wrong passwd";
			header('Location: error.php');
			exit ;
		}
	}
}
$_SESSION['error'] = "login doesn't exist";
header('Location: error.php');
exit;
?>
