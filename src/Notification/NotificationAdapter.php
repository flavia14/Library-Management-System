<?php

declare(strict_types=1);

namespace App\Notification;

abstract class NotificationAdapter
{
    abstract function sendNotification(NotificationInterface $notification): void;
}
