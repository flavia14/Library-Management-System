<?php

namespace App\Notification;

class NotificationService
{
    public function __construct(
        private NotificationAdapter $notificationAdapter
    )
    {
    }

    public function sendNotification(NotificationInterface $notification): void
    {
        $this->notificationAdapter->sendNotification($notification);
    }

    public function changeNotifier(NotificationAdapter $notifier): void
    {
        $this->notificationAdapter = $notifier;

    }
}
