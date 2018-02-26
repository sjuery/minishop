<?php
session_start();

$fd = fopen("./data/account.tsv", "a+");
if (!$fd)
{
	$_SESSION['error'] = "failed to open the data file";
	header('Location: error.php');
	exit;
}
if ($_POST['passwd'] !== $_POST['repass'])
{
	$_SESSION['error'] = "passwd does not match";
	header('Location: error.php');
	exit;
}
foreach ($_SESSION['account'] as $account)
{
	if ($account['username'] === $_POST['username'])
	{
		$_SESSION['error'] = "username already exists";
		header('Location: error.php');
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
