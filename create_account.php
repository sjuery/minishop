<?php
session_start();

$fd = fopen("./data/account.tsv", "a+");
if (!$fd_account)
{
	header('Location: login_signup.php');
	exit ;
}

$len = count($_POST);
foreach ($_POST as $i => $value)
{
	if ($i < $len - 1)
		fwrite($fd, $value."\t");
	else
		fwrite($fd, $value."\n");
}

?>
