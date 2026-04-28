<?php
require_once VOCALSYNTH_PATH . 'includes/covermanager.php';
require_once VOCALSYNTH_PATH . 'includes/functions.php';

// initialize the class (this specific instance of the cover gird)
$manager = new CoverManager();

// set filters
$filters = [
	'limit' => 2,
	'requireVideo' => true,
	'minYear' => 2016
];

// fetch covers
$all_covers = $manager->getCovers($filters); 
?>



<div class="title2">
	<img
		src="/_assets/arrow2.gif" />
	intro
</div>
27 || they/them || NJ, US

hiiiiii the namess lunar, and i had the bio i had before this one for like 10 years

iiiiiim just a guy, i like to do thing!! most of my thing i like exist inside my puter so im making a
little online garden for myself!! 

if you're here reading this then thank you for caring about me and the little things i like to do!

<div class="title2">
	<img
		src="/_assets/arrow2.gif" />
	latest videos
</div>
<div class="covercontainer">'
	<?php $manager->renderGrid($all_covers) ?>
</div>

<div class="title2">
	<img
		src="/_assets/arrow2.gif" />
	stamps
</div>
<center>
	<?php
	$absolutePath = BASE_PATH . '/_assets/stamps/';
	$stampsDir = glob($absolutePath . "*.{jpg,png,gif}", GLOB_BRACE);

	foreach ($stampsDir as $stamp) {
		// Convert server path back to a web-friendly relative URL for the <img> tag
		$webPath = '/_assets/stamps/' . basename($stamp);
		echo '<img src="' . htmlspecialchars($webPath) . '" alt="stamp"/>';
	}
	?>
</center>
