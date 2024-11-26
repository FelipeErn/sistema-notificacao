<?php

namespace Strategy;

interface NotificationStrategy
{
    public function sendNotification($message, $recipient);
}
