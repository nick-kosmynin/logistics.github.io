<?php 

$name = $_POST['name'];
$years = $_poST['years'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_pOST['state'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kolya301284@gmail.com';                 // Наш логин
$mail->Password = 'kosmynin1';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('kolya301284@gmail.com', 'logistic');   // От кого письмо 
$mail->addAddress('kosmynin84@outlook.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	опыт: '. $years .' <br>
	E-mail: ' . $email . ' <br>
	Номер телефона: ' . $phone . '<br>
	Штат: ' . $state .'';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>