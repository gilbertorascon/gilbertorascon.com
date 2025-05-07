<section id="contact" class="section">
	<div class="contact_wrapper max_width">
		<h3>Contact</h3>
		<p class="subheading">Please feel free to contact me with the form below and I will get back to you as soon as possible.</p>
		<div id="contact_form">
			<form action="confirmation.php" method="POST">

				<div class="form_field">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter Your Name" required>
				</div>

				<div class="form_field">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter Your Email" required>
				</div>

				<div class="form_field">
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" placeholder="Enter A Subject" required>
				</div>

				<div class="form_field">
					<label for="message">Message</label>
					<textarea name="message" id="message" rows="8" cols="20" placeholder="Enter Your Message" required></textarea>
				</div>

				<button type="submit" name="submit" class="btn">Submit</button>
			</form>
		</div>
	</div>
</section>