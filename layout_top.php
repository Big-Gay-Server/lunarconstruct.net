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
		<div id="headerwrap">
			<div id="header">
				<br />
				<br />
				<center>
					<div class="headertext">★ LunarConstruct ★</div>
				</center>
			</div>
		</div>

		<div id="navigationwrap">
			<div id="navigation" style="border-top-left-radius: 40px;border-top-right-radius: 40px;">
				<center>
					<a href="/garden">garden</a>
					<a href="https://vocalsynth.lunarconstruct.net">VocalSynth</a>
					<a href="https://lunatine.lunarconstruct.net">Lunatine</a>
					<a href="/gaming">Gaming</a>
					<a href="/shrines">Shrines</a>
					<a href="/about">About</a>
				</center>
			</div>
		</div>

		<div id="navigationwrap">
			<div id="navigation">
				<center>
					<?php
					include_once 'socials.php';
					foreach ($socialLinks as $link) {
						echo '<a href="' . htmlspecialchars($link['url']) . '">';
						echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="' . $link['fill'] . '" viewBox="0 0 32 32">';
						echo '<path d="' . $link['path'] . '"></path>';
						// Handle special case for Twitch (extra paths)
						if (isset($link['extra'])) {
							echo $link['extra'];
						}
						echo '</svg>';
						echo '</a> ';
					}
					?>
				</center>
			</div>
		</div>

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
						$webPath = 'blinkies/' . basename($blinky);
						echo '<img src="' . htmlspecialchars($webPath) . '" alt="blinky"/>';
					}
					?>
					}
					?>
				</center>
			</div>
		</div>