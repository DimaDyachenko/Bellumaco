
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */

require 'PHPMailer/src/Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer/src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(TRUE);
/* Open the try/catch block. */
try {

    $data =  key($_POST);
    $email = str_replace('_', '.', $data);

    echo str_replace('_', '.', $data);

    /* Set the mail sender. */
    $mail->setFrom('info@bellumaco.com', 'bellumaco.com');
    /* Add a recipient. */
    $mail->addAddress($email, 'D');
    /* Set the subject. */
    $mail->Subject = 'bellumaco';
    /* Set the mail message body. */
    $mail->Body = 'Thank you for contacting Bellumaco, we received your message and will contact you shortly.
    Regards ,
    Bellumaco team';

    /* SMTP parameters. */

    /* Tells PHPMailer to use SMTP. */
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    /* SMTP server address. */
    //$mail->CharSet = "UTF-8";
    $mail->Host = 'smtp.gmail.com';
    /* Use SMTP authentication. */
    $mail->SMTPAuth = TRUE;
    /* Set the encryption system. */
    $mail->SMTPSecure = 'tls';
    $mail->MailerDebug = false;
    /* SMTP authentication username. */
    $mail->Username = 'bellumaco@gmail.com';
    /* SMTP authentication password. */
    $mail->Password = '1234567890maco';
    /* Set the SMTP port. */
    $mail->Port = 587;
    /* Finally send the mail. */
    $mail->send();
} catch (Exception $e) {
    /* PHPMailer exception. */
    echo $e->errorMessage();
} catch (\Exception $e) {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
}

?>