#!/usr/bin/php
<?php

session_start();

/*
**	'r+' read/write
**	'w+' read/write (truncate)
** 	'a+' read/write (append)
*/
$fd_account = fopen("./data/account.tsv", "");
$fd_basket = fopen("./data/basket.tsv", "");
$fd_item = fopen("./data/item.tsv", "");
if (!$fd_account | !$fd_basket | !$fd_item)
	return false;
else
{
	$_SESSION['account'] = array[];
	$_SESSION['basket'] = array[];
	$_SESSION['item'] = array[];
}

//	account open/read

for ($n = 0; ($line = fgets($fd_account)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['account'][$n] = array[];
	for ($tmp as $i => $value)
		$_SESSION['account'][$n][$i] = $value;
}

//	basket open/read

for ($n = 0; ($line = fgets($fd_basket)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['basket'][$n] = array[];
	for ($tmp as $i => $value)
		$_SESSION['basket'][$n][$i] = $value;
}

//	item open/read

for ($n = 0; ($line = fgets($fd_item)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['item'][$n] = array[];
	for ($tmp as $i => $value)
		$_SESSION['item'][$n][$i] = $value;
}

//	delete account

foreach ($_SESSION['account'] as $id)
{
	if ($id['login'] == $target)
	{
		array_splice($_SESSION['account'], $id);
		if (!($fd = fopen("./data/account.tsv", "wr")))
			return false;
		$len = count($_SESSION['account'][0]);
		foreach ($_SESSION['account'] as $i => $val)
		{
			if ($i < $len - 1)
				fwrite($fd, $val."\t");
			else
				fwrite($fd, $val."\n");
		}
	}
}
?>
