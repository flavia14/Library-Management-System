<?php

declare(strict_types=1);

interface LibraryMembershipServiceInterface
{
    public function cancelMembership(User $user, LibraryMembership $libraryMembership);
    public function isMembershipValid(LibraryMembership $libraryMembership): bool;
    public function extendMembership(LibraryMembership $libraryMembership, DateTime $newEndDate);
    public function viewMembershipDetails(User $user): LibraryMembership;
    public function issueLibraryCard(User $user): LibraryMembership;
}
