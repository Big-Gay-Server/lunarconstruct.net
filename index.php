<div id="contentwrap">
	<div id="content">
		<div class="title2">
			<img
				src="https://64.media.tumblr.com/0b91ec3f6bd8e50404dc513ffbdf5821/014d6f73835b6e87-d3/s75x75_c1/f19c167835beae789c67e6721b3492325131958c.gifv" />
			intro
		</div>
		27 || they/them || NJ, US
		<br />
		<br />
		<br />

		hiiiiii the namess lunar, and i had the bio i had before this one for like 10 years
		<br />
		<br />
		iiiiiim just a guy, i like to do thing!! most of my thing i like exist inside my puter so im making a
		little garden for myself!! why not lmao
		<br />
		<br />
		if you're here reading this then thank you for caring about me and the little things i like to do!
		<br />
		<br />
		<br />
		<br />

		<?php
		require_once __DIR__ . "/../vocalsynth/includes/covermanager.php";
		require_once __DIR__ . "/../vocalsynth/includes/functions.php";
		
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

		// display covers!!! so easy
		echo '<div class="title2">
			<img
				src="https://64.media.tumblr.com/0b91ec3f6bd8e50404dc513ffbdf5821/014d6f73835b6e87-d3/s75x75_c1/f19c167835beae789c67e6721b3492325131958c.gifv" />
			latest videos
		</div>';
		echo '<div class="covercontainer">';
			$manager->renderGrid($all_covers); 
		echo '</div>';
		?>
		<br />
		<br />
		<br />

		<div class="title2">
			<img
				src="https://64.media.tumblr.com/0b91ec3f6bd8e50404dc513ffbdf5821/014d6f73835b6e87-d3/s75x75_c1/f19c167835beae789c67e6721b3492325131958c.gifv" />
			stamps
		</div>
		<center>
			<?php
			$stampDir = glob("stamps/*.{jpg,png,gif}", GLOB_BRACE);

			foreach ($stampDir as $stamp) {
				$path = str_replace("\\", "/", $stamp);
				
				echo '<img src="' . htmlspecialchars($path) . '" alt="stamp"/>';
			}
			?>
		</center>
	</div>
</div>