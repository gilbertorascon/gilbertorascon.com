<?php
	$projects = [
		[
			'image' => 'anacapastorage.com.png',
			'title' => 'Anacapa Storage',
			'description' => 'A full website built with the CodeIgniter framework for a single facility self-storage company. This project was done individually and features a rates page that integrated Automatit\'s reservation system and the Client\'s property software management, allowing users to view and reserve units. The website also featured a contact form and Automatit\'s Space Estimator and Size Guide tools.',
			'tools' => 'HTML|PHP|CSS/SCSS|JavaScript|MySQL',
			'link'=> 'https://web.archive.org/web/20231228121702/https://anacapastorage.com/',
		],
		[
			'image' => 'ulok.com.png',
			'title' => 'Downtown U-Lok Storage',
			'description' => 'A full website built with the CodeIgniter framework for a single facility self-storage company. This project was done in collaboration with other developers. I worked on the homepage, internal pages, and the contact page. This website also features a rates page that integrated Automatit\'s reservation system and the Client\'s property software management, allowing users to view and reserve units. The website also featured a contact form and Automatit\'s Space Estimator and Size Guide tools.',
			'tools' => 'HTML|PHP|CSS/SCSS|JavaScript|MySQL',
			'link'=> 'https://web.archive.org/web/20240619015358/https://ulok.com/',
		],
		[
			'image' => 'eagleeyestorage.com.png',
			'title' => 'Eagle Eye Secure Storage',
			'description' => 'A full website built with the CodeIgniter framework for a self-storage company with 3 locations. This project was done in collaboration with other developers. I worked on sections of the homepage, rates pages, and internal pages. This website also features a rates page that integrated Automatit\'s reservation system and the Client\'s property software management, allowing users to view and reserve units. The website also featured a contact form and Automatit\'s Space Estimator and Size Guide tools.',
			'tools' => 'HTML|PHP|CSS/SCSS|JavaScript|MySQL',
			'link'=> 'https://web.archive.org/web/20240613031418/https://eagleeyestorage.com/',
		],
		[
			'image' => 'beechgrove.us.png',
			'title' => 'Beechgrove Self Storage',
			'description' => 'A full website built with the CodeIgniter framework for a single facility self-storage company. This project was done individually and features a rates page that integrated Automatit\'s reservation system and the Client\'s property software management, allowing users to view and reserve units. The website also featured a contact form and Automatit\'s Space Estimator and Size Guide tools.',
			'tools' => 'HTML|PHP|CSS/SCSS|JavaScript|MySQL',
			'link'=> 'https://web.archive.org/web/20240224181237/https://www.beechgrove.us/',
		]
	]
?>
<section id="portfolio" class="section">
	<div class="portfolio_wrapper max_width">
		<h3>Portfolio</h3>
		<p class="subheading">Below you will find websites I helped build during my time at Automatit. <br>Since the company closed and Clients migrated their services, the link included is from the <a href="https://web.archive.org/" target="_blank">Internet Archive</a> to display the website as it was when I worked on it.</p>
		<div class="projects_wrapper">
			<?php foreach($projects as $project) { ?>
				<div class="project">
					<div class="project_description">
						<h4><?=$project['title']?></h4>
						<p><?=$project['description']?></p>
						<div class="project_details">
							<span>Built With:</span>
							<ul>
								<?php
									$site_tools = explode('|', $project['tools'] );
									foreach($site_tools as $site_tool){ ?>
										<li><?=$site_tool?></li>
									<?php }
								?>
							</ul>
						</div>
						<a class="btn" href="<?=$project['link']?>" target="_blank">View Site</a>
					</div>
					<div class="project_image">
						<h4 class="mobile_heading"><?=$project['title']?></h4>
						<img src="./assets/images/projects/<?=$project['image']?>" alt="">
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>