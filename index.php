<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
	<title>Fruit Black Market</title>
</head>
<body>
	<header>
		<strong class="title">Welcome To The Fruit Black Market</strong>
		<form action="./login_user.php">
			<input type="submit" value="Login">
		</form>
	<?php
	if ($_SESSION['login'] === "admin")
	{
		echo "<form action="./admin_
	}
	?>
	<input type="submit" value="Basquet">
	<form action="./login_signup.php">
		<input type="submit" value="Sign Up">
	</form>
	</header>
		<table>
			<td>
				<figure><img src="https://greatist.com/sites/default/files/styles/fb-1200x630/public/wp-content/uploads/2011/11/Apples.jpg?itok=Cqn_I8Ms">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
			<td>
				<figure><img src="https://sc01.alicdn.com/kf/UT8NWONXFVXXXagOFbXA/Fresh-Green-apples.jpg">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
			<td>
				<figure><img src="https://c2.staticflickr.com/4/3365/3421750128_04e11ca4e1_b.jpg">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
		</table>
		<table>
			<td>
				<figure><img src="http://ikaland.hu/sites/default/files/pictures/banan.jpg">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
			<td>
				<figure><img src="https://img.aws.livestrongcdn.com/ls-article-image-673/ds-photo/getty/article/103/51/457512575.jpg">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
			<td>
				<figure><img src="https://cdn3.volusion.com/lcezu.ypudg/v/vspfiles/photos/bluebanana-3.jpg?1403955729">
				<figcaption class="info"><p>WHAT ARE WE SELLING?<br><strong class="price">PRICE TO BE DECIDED</strong></p>
				<input type="submit" value="Add to basquet"></figcaption></figure>
			</td>
		</table>
</body>
</html>