<?php

declare(strict_types=1);

namespace App\Helper;

class HttpResponseHelper
{
    public static function sendBadRequestResponse(string $message): void
    {
        http_response_code(400);
        echo $message;
    }

    public static function sendNotFoundResponse(): void
    {
        http_response_code(404);
    }
}
