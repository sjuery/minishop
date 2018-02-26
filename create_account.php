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

$fd = fopen("./data/account.tsv", "a+");
if (!$fd)
{
	$_SESSION['create_ret'] = "failed to open file";
	header('Location: login_signup.php');
	exit;
}
if ($_POST['passwd'] !== $_POST['repass'])
{
	$_SESSION['create_ret'] = "passwd not match";
	header('Location: login_signup.php');
	exit;
}
foreach ($_SESSION['account'] as $account)
{
	if ($account['username'] === $_POST['username'])
	{
		$_SESSION['create_ret'] = "already exist";
		header('Location: login_signup.php');
		exit;
	}
}

$len = count($_POST);
$new_account = array();
$i = 0;
foreach ($_POST as $value)
{
	$new_account[$_SESSION['account'][0][$i]] = $value;
	if ($i < $len - 1)
		fwrite($fd, $value."\t");
	else
		fwrite($fd, $value."\n");
	$i++;
}

header('Location: menu.php');
exit;
?>
