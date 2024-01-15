<?php

declare(strict_types=1);

interface SystemServiceInterface
{
    public function sendOverdueNotification(NotificationServiceInterface $notificationService);
    public function sendReservationAvailableNotification(NotificationServiceInterface $notificationService);
    public function sendReservationCanceledNotification(NotificationServiceInterface $notificationService);
    public function addFine(User $user);
}
