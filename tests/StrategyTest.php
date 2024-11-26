<?php

use PHPUnit\Framework\TestCase;
use Strategy\EmailNotification;
use Strategy\SMSNotification;
use Strategy\NotificationContext;

class StrategyTest extends TestCase
{
    public function testEmailNotification()
    {
        $context = new NotificationContext();
        $emailStrategy = new EmailNotification();

        $context->setStrategy($emailStrategy);

        // Aqui, usamos um buffer de saída para capturar o echo
        ob_start();
        $context->sendNotification("Mensagem de teste");
        $output = ob_get_clean();

        $this->assertStringContainsString("Enviando e-mail", $output);
    }

    public function testSMSNotification()
    {
        $context = new NotificationContext();
        $smsStrategy = new SMSNotification();

        $context->setStrategy($smsStrategy);

        ob_start();
        $context->sendNotification("Mensagem de teste");
        $output = ob_get_clean();

        $this->assertStringContainsString("Enviando SMS", $output);
    }
}
?>
