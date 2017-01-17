<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Test</title>
		<meta charset="iso-8859-1">
		<link rel="stylesheet" href="./assets/stylesheets/style.css" type="text/css">
	</head>

	<body id="top">
		<div class="wrapper header-nav">
			<header id="header" class="clear">
				<div id="hgroup">
					<h1><a href="#"><img src="<?php echo $logo_image_url; ?>" /></a></h1>
					<h2>Test Template</h2>
				</div>
				<nav>
					<ul>
						<li><a href="#">Test</a></li>
						<li class="last"><a href="#">Last Link</a></li>
					</ul>
				</nav>
			</header>
		</div>

		<div class="wrapper row2">
			<div class="display_name">
				<?php echo 'Hello, ' .$name; ?>
			</div>
		</div>

		<div class="wrapper row3">
			<footer id="footer" class="clear">
				<p class="fl_left"> 2017 - <a href="/">PHP Rendring Template</a></p>
				<p class="fl_right">Template by <a href="" title="Debabrata Karfa">Debabrata Karfa</a></p>
			</footer>
		</div>
	</body>
</html>