<?php

namespace Strategy;

class NotificationContext {
    private $strategy;

    public function __construct(NotificationStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function notify($message, $recipient) {
        $this->strategy->sendNotification($message, $recipient);
    }
}
