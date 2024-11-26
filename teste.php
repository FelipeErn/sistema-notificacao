<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Inclua o autoload do Composer

$mail = new PHPMailer(true); // Cria uma instância do PHPMailer

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();                                             // Define o Mailer para usar SMTP
    $mail->Host = 'smtp.gmail.com';                                // Define o servidor SMTP (Gmail)
    $mail->SMTPAuth = true;                                        // Ativa a autenticação SMTP
    $mail->Username = 'fehh.ernn@gmail.com';                       // Seu endereço de e-mail
    $mail->Password = 'xsrf ixsb fxsc qykk';                          // Substitua pela senha de app gerada
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // Ativa a criptografia TLS
    $mail->Port = 587;                                            // Porta SMTP (587 é padrão para TLS)

    // Defina o remetente e o destinatário
    $mail->setFrom('fehh.ernn@gmail.com', 'Felipe Ern');              // E-mail e nome do remetente
    $mail->addAddress('felipe.ern@unidavi.edu.br', 'Felipe Ern 2');  // E-mail do destinatário

    // Conteúdo do e-mail
    $mail->isHTML(true);                                          // Define o formato como HTML
    $mail->Subject = 'Teste de Login do E-mail';                   // Assunto do e-mail
    $mail->Body    = 'Este é um teste para verificar se o login e o envio de e-mail estão funcionando corretamente.'; // Corpo do e-mail

    // Envia o e-mail
    if ($mail->send()) {
        echo 'E-mail enviado com sucesso!';
    } else {
        echo 'Falha ao enviar o e-mail.';
    }
} catch (Exception $e) {
    // Exibe erro se ocorrer algum problema
    echo "Erro ao enviar e-mail. Erro: {$mail->ErrorInfo}";
}
?>
