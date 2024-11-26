<?php

namespace Strategy;

class SMSNotification implements NotificationStrategy
{
    public function sendNotification($message, $recipient)
    {
        // Aqui você poderia integrar com algum serviço de SMS
        echo "Enviando SMS para {$recipient}: {$message}";
    }
}
