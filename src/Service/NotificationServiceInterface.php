<?php

declare(strict_types=1);

interface NotificationServiceInterface
{
    public function sendNotification(string $message);
}
