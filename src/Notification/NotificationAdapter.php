<?php

declare(strict_types=1);

namespace App\Notification;

abstract class NotificationAdapter
{
    abstract public function sendNotification(NotificationInterface $notification): void;
}
