<?php

declare(strict_types=1);

namespace App\NotificationObserverVersion;

interface SubjectInterface
{
    public function attach(SubjectObserverInterface $observer): void;
    public function detach(SubjectObserverInterface $observer): void;
    public function notify(Notification $notification): void;
}
