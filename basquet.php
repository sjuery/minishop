<?php
session_start();
$fd = fopen("./data/basquet.tsv", "r");
$_SESSION['basquet'] = array();
$basquet_key = explode("\t", fgets($fd));
for ($n = 0; ($line = fgets($fd)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['basquet'][$n] = array();
	foreach ($tmp as $key => $value)
		$_SESSION['basquet'][$n][trim($basquet_key[$key])] = $value;
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
	<title>Basquet</title>
</head>
<body>
<?php
	foreach ($_SESSION['basquet'] as $basquet)
	{
		if ($basquet['username'] === $_SESSION['login'])
		{
			echo "
			<table>
				<td>
					<strong>item:".$basquet['item']."<br /><br />
					<strong>qty: ".$basquet['qty']." EA</strong></p>
					<strong>price: $".$item['price']."</strong></p>
				</td>
			</table>";
		}
	}
?>
	<table>
		<td>
			<figure><img src="http://www.charbase.com/images/glyph/10763">
			<figcaption class="info"><p>Total Cost<br><strong class="price">$<?php echo $_SESSION['total'];?></strong></p>
		</td>
	</table>
</body>
</html>
