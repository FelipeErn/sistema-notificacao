<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Notificação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Enviar Notificação</h1>
        <form action="notify.php" method="POST">
            <div class="form-group">
                <label for="notification_type">Tipo de Notificação</label>
                <select name="notification_type" id="notification_type" required>
                    <option value="email">E-mail</option>
                    <option value="sms">SMS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="recipient">Destinatário</label>
                <input type="text" name="recipient" id="recipient" placeholder="Insira o destinatário" required>
            </div>

            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea name="message" id="message" placeholder="Escreva a sua mensagem" required></textarea>
            </div>

            <div class="form-group">
                <label for="new_user">Nome do usuário (opcional)</label>
                <input type="text" name="new_user" id="new_user" placeholder="Nome para o usuário (opcional)">
            </div>

            <button type="submit" class="submit-button">Enviar Notificação</button>
        </form>
    </div>
</body>
</html>
