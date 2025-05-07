<section id="about" class="section">
	<div class="about_wrapper max_width">
		<h3>About Me</h3>
		<p class="subheading">Find out more about me, my experience, and my skills when it comes to web development.</p>
		<div class="about_columns">
			<div class="column">
				<h4>Get to Know Me</h4>
				<p>Hello! I'm <a class="name" href="https://youtu.be/QNRgK333f6w?feature=shared" target="_blank">Gilberto</a> Rascón, a Front-End Web Developer with five years of experience in HTML5, CSS, SCSS, PHP, JavaScript, MySQL, and the CodeIgniter framework.</p>
				<p>After graduating from college in 2014 and initially working in Social Work, I decided to switch careers to web development in 2018 after completing the Full Stack Web Development Program at the University of Arizona. My first job in web development was at Automatit Inc in 2019 as a Website Support Technician, where I gained valuable experience in Front-End Development and Customer Support. My duties involved collaborating with clients to update or troubleshoot their websites, ensuring they met user expectations and improved performance.</p>
				<p>In 2020, I moved into a Junior Web Developer position at the same company, where my role expanded to include developing client websites, either independently or as part of a team. This involved creating new, secure and mobile responsive sites that integrated with various facility management software, enabling users to make reservations and rentals online.</p>
				<p>Throughout my journey, I have enhanced my Front-End Development skills as well as my abilities in client communication and teamwork. I am currently seeking opportunities as a Front-End Developer or Website Support Technician where I can contribute, learn, and grow.</p>
			</div>
			<div class="column">
				<h4>My Skills</h4>
				<?php
					$skills = array('HTML', 'CSS', 'SCSS', 'PHP', 'JavaScript', 'MySQL', 'CodeIgniter', 'Responsive Design', 'Web Accessibility', 'GIT', 'FTP', 'DNS', 'Troubleshooting', 'Customer Support');
				?>
				<div class="skills_wrapper">
					<?php
						foreach($skills as $skill) { ?>
							<span class="skill btn"><?=$skill?></span>
						<?php }
					?>
				</div>
			</div>
		</div>
	</div>
</section>