<?php

declare(strict_types=1);

namespace App\NotificationObserverVersion;

interface SubjectObserverInterface
{
    public function update(SubjectInterface $subject, Notification $notification): void;
}
