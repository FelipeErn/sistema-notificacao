<?php

namespace Utils;

class Logger
{
    public static function log(string $message): void
    {
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents('log.txt', "[$timestamp] $message\n", FILE_APPEND);
    }
}
