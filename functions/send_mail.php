<?php 
//nos traemos las librerias necesarias (fpdf-PHPMailer)
//require_once(ABSPATH.'/library/fpdf/fpdf.php');
require_once(ABSPATH.'/library/PHPMailer/PHPMailerAutoload.php'); 

//funcion envia el formulario de contacto
//recibe el parametro $_POST con los datos del formulario
function send_form($data){


		//echo 'working send form';

		// INSTANCIAMOS LA CLASE Y CONFIGUARMOS LOS PARAMETROS DEL CORREO
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 2;      //permite modo debug para ver mensajes de las cosas que van ocurriendo

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.adbizers.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'info@adbizers.com';        // SMTP username
		$mail->Password = '$3Cj6s4c';                      // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to


		$mail->setFrom('info@adbizers.com', 'Formulario Contacto Adbizers');
		$mail->addAddress('gdpr@interban.com', '');     // Add a recipient //destino
		//$mail->addAddress('jorge.vazquez@interban.com');               // Name is optional
		$mail->addReplyTo('info@adbizers.com', 'Formulario Adbizers');
		$mail->addCC('');
		// $mail->addBCC('bcc@example.com');



		//metodo para incluir el archivo en forma de cadena
		//asignamos nombre del archivo
		//$mail->addStringAttachment($pdfdoc, slugify($budget['apellidos']).'.pdf');
		

		$mail->isHTML(true);                                  // Set email format to HTML


		$mail->Subject = $data['subjet'];
		$mail->Body    = $data['name'].'<br>'. $data['email'].'<br>'. $data['message'];
		$mail->AltBody = '';



		if( !$mail->send() ){
		
			header('Location:' . $_SERVER['PHP_SELF'] .'?e=SEND_FAIL' );
		     echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		
		} else {
		
			header('Location:' . $_SERVER['PHP_SELF'] .'?e=SEND_OK' );
		    // echo 'Message has been sent';
		
		}

}