<?php
// Recupera os parâmetros enviados via query string
$recipient = isset($_GET['recipient']) ? $_GET['recipient'] : 'Destinatário não informado';
$message = isset($_GET['message']) ? $_GET['message'] : 'Mensagem não informada';
$user = isset($_GET['user']) ? $_GET['user'] : 'Usuário não informado';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso - Notificação Enviada</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Notificação Enviada com Sucesso!</h1>
        <p><strong>Destinatário:</strong> <?php echo htmlspecialchars($recipient); ?></p>
        <p><strong>Mensagem:</strong> <?php echo htmlspecialchars($message); ?></p>
        <p><strong>Usuário:</strong> <?php echo htmlspecialchars($user); ?></p>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>
