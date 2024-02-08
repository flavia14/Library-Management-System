<?php

declare(strict_types=1);

namespace App\NotificationObserverVersion;

class NotificationObserverService implements SubjectObserverInterface
{
    public function update(SubjectInterface $subject, Notification $notification): void
    {
    }
}
