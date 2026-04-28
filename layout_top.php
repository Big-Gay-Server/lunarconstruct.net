<?php
require_once 'config.php';
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LunarConstruct</title>
	<link href="/style.css" rel="stylesheet" />
	<link href="https://478.neocities.org/catalog/fonts.css" rel="stylesheet" />
</head>

<body>
	<br />
	<br />
	<br />

	<div id="wrapper">
		<?php require_once 'header.php'; ?>

		<div id="leftcolumnwrap">
			<div id="leftcolumn">
				<div class="title">
					<img
						src="/arrow.gif" />
					tinket :)
				</div>
				<center>
					<a href="/trinket">
						<img src="/trinket/Trinket comm cropped.png" style="height: 200px" />
					</a>
				</center>
			</div>

			<div id="leftcolumn">
				<div class="title">
					<img
						src="/arrow.gif" />
					webrings
				</div>
				<div id="vocaring" class="small"></div>
				<link rel="stylesheet" href="https://electric-tenshi.nekoweb.org/vocaring/vocaring.css">
				<script src="https://electric-tenshi.nekoweb.org/vocaring/vocaring-variables.js"></script>
				<script src="https://electric-tenshi.nekoweb.org/vocaring/vocaring-widget.js"></script>
				<br />
				<br />
			</div>

			<div id="leftcolumn">
				<div class="title">
					<img
						src="/arrow.gif" />
					MY SUPER COOL FRIENDS
				</div>
				<a href="https://www.najah.cloud/"><img src="/najahbutton.png"></img></a>
				<br />
				<br />
			</div>

			<div id="leftcolumn">
				<div class="title">
					<img
						src="/arrow.gif" />
					blinkies
				</div>

				<center>
					<?php
					$absolutePath = BASE_PATH . 'blinkies/';
					$blinkiesDir = glob($absolutePath . "*.{jpg,png,gif}", GLOB_BRACE);

					foreach ($blinkiesDir as $blinky) {
						// Convert server path back to a web-friendly relative URL for the <img> tag
						$webPath = '/blinkies/' . basename($blinky);
						echo '<img src="' . htmlspecialchars($webPath) . '" alt="blinky"/>';
					}
					?>
				</center>
			</div>
		</div>