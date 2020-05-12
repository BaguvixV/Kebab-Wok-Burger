<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="styles/img/icons8-french-fries-48.png">
	<title>Vai ir kādi jautājumi?</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/assets/css/vikj.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>
<body class="background">

	<button onClick="location.href='/'" class="uz_sakumu">Uz sākuma lapu</button>

	<div class="vai_ir_k_jaut">

	<?php
		if(isset($_POST['submit']))
		// Load Composer's autoloader
		include '../src/phpmailer/PHPMailerAutoload.php';
		include '../src/config.php';
		//require '../src/config.php';

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                    	// Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'vladdss02@gmail.com';                	// SMTP username
			$mail->Password   = 'zxcerfsahd111';                        // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom(EMAIL, 'Mailer');
			$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');

			// Attachments
			$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	?>
		
		<form action="#" class="form" method="post">
			<h2>Ir jautājumi?</h2>
			<p type="Vārds:"><input placeholder="Vārds.." name="name" /></p>
			<p type="Epasts:"><input placeholder="Jūsu epasts.." name="email" /></p>
			<p type="Tālrunis:"><input placeholder="Jūsu tālrunis.." name="number" /></p>
			<p type="Vēstule:"><input placeholder="Rakstīt jūsu vēstuli šeit.." name="message" /></p>
			<button class="button02" type="submit">sūtīt</button>

			<div class="info">
				<span></span>+371 22444455
				<span></span> kwb@inbox.lv
			</div>

		</form>
	</div>
</body>
</html>