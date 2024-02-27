<?php

declare(strict_types=1);

namespace App\Helper;

class HttpResponseHelper
{
    public static function sendBadRequestResponse(string $message): void
    {
        header('HTTP/1.1 400 Bad Request');
        echo $message;
    }

    public static function sendNotFoundResponse(): void
    {
        header('HTTP/1.1 404 Not Found');
    }
}

