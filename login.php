<?php

session_start();

$fd_account = fopen("./data/account.tsv", "r");
$_SESSION['account'] = array();
$account_key = explode("\t", fgets($fd_account));
for ($n = 0; ($line = fgets($fd_account)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['account'][$n] = array();
	foreach ($tmp as $key => $value)
		$_SESSION['account'][$n][$account_key[$key]] = $value;
}

foreach ($_SESSION['account'] as $account)
{
	if ($account['username'] === $_POST['username'])
	{
		if ($account['passwd'] === $_POST['passwd'])
		{
			$_SESSION['login'] = $_POST['username'];
			header('Location: index.php');
			exit ;
		}
		else
		{
			$_SESSION['login_ret'] = "wrong passwd";
			header('Location: login_user.php');
			exit ;
		}
	}
}

$_SESSION['login_ret'] = "login doesn't exist";
header('Location: login_user.php');
exit;
?>
