<?php

namespace Strategy;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHMailer\Exception;

class EmailNotification implements NotificationStrategy
{
    public function sendNotification($message, $recipient)
    {
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor de e-mail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Use o servidor SMTP de sua escolha
            $mail->SMTPAuth = true;
            $mail->Username = 'fehh.ernn@gmail.com'; // Substitua com seu e-mail
            $mail->Password = 'xsrf ixsb fxsc qykk'; // Substitua com sua senha ou token
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Remetente e destinatário
            $mail->setFrom('seu_email@gmail.com', 'Seu Nome'); // E-mail do remetente
            $mail->addAddress($recipient); // Destinatário

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Notificação';
            $mail->Body    = nl2br($message);

            // Envia o e-mail
            $mail->send();
            echo 'E-mail enviado com sucesso!';
        } catch (Exception $e) {
            echo "Falha ao enviar e-mail. Erro: {$mail->ErrorInfo}";
        }
    }
}
