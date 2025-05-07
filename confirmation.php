<?php include "./templates/header.php"; ?>
		<?php
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			
			require './PHPMailer/src/Exception.php';
			require './PHPMailer/src/PHPMailer.php';
			require './PHPMailer/src/SMTP.php';

			$msg = '';

			if(isset($_POST['submit'])) {

				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

				$mail = new PHPMailer(true); // Passing `true` enables exceptions

				$mail->SMTPDebug = 0;
				$mail->isSMTP();

				$mail->Host = '';
				$mail->SMTPAuth = true;
				$mail->Username = '';
				$mail->Password = '';
				$mail->SMTPSecure = 'tls';
				$mail->Port = ;

				$mail->setFrom('', 'Contact Form');
				$mail->addAddress('', 'Mailer'); // Add a recipient
				$mail->addReplyTo($_POST['email'], $_POST['name']); //
				
				$mail->isHTML(true);    
				$mail->Subject = 'Portfolio Form Submission from ' .$_POST['name'];
				$mail->Body = '<h2>Contact Form Submission</h2>
					<p><strong>Name:</strong> '.$name.'</p>
					<p><strong>Email:</strong> '.$email.'</p>
					<p><strong>Subject:</strong> '.$subject.'</p>
					<p><strong>Message</strong>: '.$message.'</p>
				';

				try {
					$mail->send();
					$msg = 'Your message was sent successfully!';
				} catch (Exception $e) {
					$msg = "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
				} 
			} else {
				$msg = "There is a problem with the contact form!";
			}
		?>

<section id="contact_confirmation" class="section">
	<div class="contact_confirmation_wrapper max_width">
		<h1><?= (isset($msg)) ? $msg : ''?></h1>
		<br>
		<p>Go Back to <a href="/">Portfolio</a></p>
	</div>
</section>
<?php include  "./templates/footer.php"; ?>
