<?php

declare(strict_types=1);

namespace App\NotificationObserverVersion;

class NotificationService implements SubjectInterface
{
    private array $observers = [];

    public function attach(SubjectObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SubjectObserverInterface $observer): void
    {
    }

    public function notify(Notification $notification): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this, $notification);
        }
    }
}

