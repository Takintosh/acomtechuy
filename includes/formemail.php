<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	if (empty($_POST['email'])) {
		$emailError = 'Campo de email vacío';
	} else {
		$email = $_POST['email'];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = 'Formato de email inválido';
		}
	}
	if (empty($_POST['message'])) {
		$messageError = 'Mensaje vacío';
	} else {
		$message = $_POST['message'];
	}
	if (empty($emailError) && empty($messageError)) {
		$date = date('j, F Y h:i A');
        $name = $_POST['name'];
        $phone = $_POST['phone'];

		$emailBody = "
			<html>
			<head>
				<title>$email se ha contactado</title>
			</head>
			<body style=\"background-color:#fafafa;\">
				<div style=\"padding:20px;\">
                    Fecha: <span style=\"color:#888\">$date</span>
                    <br>
					Nombre: <span style=\"color:#888\">$name</span>
					<br>
					Email: <span style=\"color:#888\">$email</span>
					<br>
					Teléfono: <span style=\"color:#888\">$phone</span>
					<br>
					Mensaje: <div style=\"color:#888\">$message</div>
				</div>
			</body>
			</html>
		";

		$headers = 	'From: ACOM Form <formulario@acomtech.uy>' . "\r\n" .
    				"Reply-To: $email" . "\r\n" .
    				"MIME-Version: 1.0\r\n" . 
					"Content-Type: text/html; charset=iso-8859-1\r\n";

		$to = 'contacto@acomtech.uy';
		$subject = 'Formulario desde ACOM Tech-Solutions';

		if (mail($to, $subject, $emailBody, $headers)) {
			$sent = true;	
		}
	}
}
?>