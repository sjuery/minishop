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
		$_SESSION['account'][$n][trim($account_key[$key])] = $value;
}

$fd_admin = fopen("./data/admin.tsv", "r");
$_SESSION['admin'] = array();
$admin_key = explode("\t", fgets($fd_admin));
for ($n = 0; ($line = fgets($fd_admin)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['admin'][$n] = array();
	foreach ($tmp as $key => $value)
		$_SESSION['admin'][$n][trim($admin_key[$key])] = $value;
}

$fd_item = fopen("./data/item.tsv", "r");
$_SESSION['item'] = array();
$item_key = explode("\t", fgets($fd_item));
for ($n = 0; ($line = fgets($fd_item)) !== false; $n++) 
{
	$tmp = explode("\t", $line);
	$_SESSION['item'][$n] = array();
	foreach ($tmp as $key => $value)
		$_SESSION['item'][$n][trim($item_key[$key])] = $value;
}
$_SESSION['category'] = "all";
if (!empty($_POST['category']))
	$_SESSION['category'] = $_POST['category'];
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
	<title>Fruit Black Market</title>
</head>
<body>
	<header>
		<strong class="title">Welcome To The Fruit Black Market</strong>
		<?php
		if (empty($_SESSION['login']))
		{
			echo "
			<form action=\"./login_user.php\">
				<input type=\"submit\" value=\"Login\">
			</form>";
		}
		else
		{
			echo "
			<form action=\"./login_logout.php\">
				<input type=\"submit\" value=\"Logout\">
			</form>";
		}
		?>
		<form action="./login_admin.php">
			<input type="submit" value="Admin">
		</form>
		<form action="./basquet.php">
			<input type="submit" value="Basquet">
		</form>
		<form action="./login_signup.php">
			<input type="submit" value="Sign Up">
		</form>
	</header>
	<div>
		category: 
		<form action="" name="filter" method="post">
		<select name="category">
			<option value="all" <?php if ($_SESSION['category'] === "all") echo "selected"; ?> >ALL</option>
			<option value="red" <?php if ($_SESSION['category'] === "red") echo "selected"; ?> >RED</option>
			<option value="blue" <?php if ($_SESSION['category'] === "blue") echo "selected"; ?> >BLUE</option>
			<option value="green" <?php if ($_SESSION['category'] === "green") echo "selected"; ?> >GREEN</option>
			<option value="yellow" <?php if ($_SESSION['category'] === "yellow") echo "selected"; ?> >YELLOW</option>
		</select>
		<input type="submit" value="filter">
		</form>
	</div>
	<form action="basket_add.php" method="post">
	<?php
	foreach ($_SESSION['item'] as $item)
	{
		if ($item['name'] === "Red Apple" && ($_SESSION['category'] === "all" || $_SESSION['category'] === "red"))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"https://greatist.com/sites/default/files/styles/fb-1200x630/public/wp-content/uploads/2011/11/Apples.jpg?itok=Cqn_I8Ms\">
					<figcaption class=\"info\"><p>Red Apple<br /><br />
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">price: $".$item['price']." per</strong></p>
					<input type=\"number\" name=\"redapple_qty\">
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
		if ($item['name'] === "Green Apple" && ($_SESSION['category'] === "all" || $_SESSION['category'] === "green"))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"https://sc01.alicdn.com/kf/UT8NWONXFVXXXagOFbXA/Fresh-Green-apples.jpg\">
					<figcaption class=\"info\"><p>Green Apple<br /><br />
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">1.75$ per</strong></p>
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
		if ($item['name'] === "Green Banana" && ($_SESSION['category'] === "all" || $_SESSION['category'] === "green"))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"https://img.aws.livestrongcdn.com/ls-article-image-673/ds-photo/getty/article/103/51/457512575.jpg\">
					<figcaption class=\"info\"><p>Green Banana<br>
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">price: ".$item['price']." per</strong></p>
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
		if ($item['name'] === "Blue Apple" && ($_SESSION['category'] === "all" || $_SESSION['category'] === ""))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"https://c2.staticflickr.com/4/3365/3421750128_04e11ca4e1_b.jpg\">
					<figcaption class=\"info\"><p>Blue Apple<br /><br />
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">"" per</strong></p>
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
		if ($item['name'] === "Red Apple" && ($_SESSION['category'] === "all" || $_SESSION['category'] === ""))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"https://cdn3.volusion.com/lcezu.ypudg/v/vspfiles/photos/bluebanana-3.jpg?1403955729\">
					<figcaption class=\"info\"><p>Blue Banana<br /><br />
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">price: ".$item['price']." per</strong></p>
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
		if ($item['name'] === "Red Apple" && ($_SESSION['category'] === "all" || $_SESSION['category'] === "red"))
		{
			echo "
			<table>
				<td>
					<figure><img src=\"http://ikaland.hu/sites/default/files/pictures/banan.jpg\">
					<figcaption class=\"info\"><p>Yellow Banana<br /><br />
					<strong class=\"qty\">qty: ".$item['qty']."</strong><br />
					<strong class=\"price\">price: ".$item['price']." per</strong></p>
					<input type=\"submit\" value=\"Add to basquet\"></figcaption></figure>
				</td>
			</table>";
		}
	}
	?>
	</form>
</body>
</html>
