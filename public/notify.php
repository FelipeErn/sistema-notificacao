<?php
// Inclui o autoload do Composer
require_once __DIR__ . '/../vendor/autoload.php';

use Strategy\EmailNotification;
use Strategy\SMSNotification;
use Strategy\NotificationContext;
use Singleton\UserRegistry;

// Obtém os dados do formulário
$notificationType = isset($_POST['notification_type']) ? $_POST['notification_type'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$recipient = isset($_POST['recipient']) ? $_POST['recipient'] : '';
$newUser = isset($_POST['new_user']) ? $_POST['new_user'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($recipient)) {
        echo "Por favor, insira o destinatário.";
        exit;
    }

    if (!empty($newUser)) {
        $userRegistry = UserRegistry::getInstance();
        $userRegistry->setUser($newUser);
    }

    if ($notificationType == 'email') {
        $notification = new NotificationContext(new EmailNotification());
    } elseif ($notificationType == 'sms') {
        $notification = new NotificationContext(new SMSNotification());
    } else {
        echo "Tipo de notificação não reconhecido.";
        exit;
    }

    if (!empty($message)) {
        $notification->notify($message, $recipient);
        $userRegistry = UserRegistry::getInstance();
        header("Location: success.php?recipient=" . urlencode($recipient) . "&message=" . urlencode($message) . "&user=" . urlencode($userRegistry->getUser()));
        exit;
    } else {
        echo "Por favor, insira uma mensagem para enviar.";
    }
}
