<?php

namespace App;

use Cache;
use Exception;

class Registration
{
    const INVITES_DISABLED = 'DISABLED';
    const INVITES_ENABLED = 'ENABLED';
    const INVITES_OPEN_LIMITED = 'OPEN_LIMITED';
    const INVITES_INVITES_LIMITED = 'INVITES_LIMITED';

    private function getUserCount(): int
    {
        if (!$userCount = Cache::get('user.count')) {
            try {
                $userCount = User::query()->count('id');
                Cache::forever('user.count', $userCount);
            } catch (Exception $e) {
                $userCount = 0;
            }
        }
        return (int) $userCount;
    }

    public function isOpen(): bool
    {
        if (config('registration.open') === false) {
            return false;
        }

        if ($this->isOverLimit()) {
            return false;
        }

        return true;
    }

    public function isOverLimit(): bool
    {
        return ($this->getUserCount() >= config('registration.limit', 100));
    }

    public function hasQueue(): bool
    {
        if (config('registration.queue') === false) {
            return false;
        }
        return $this->isOverLimit();
    }

    public function invitesAllowed(): bool
    {
        $config = config('registration.invites');

        if ($config === self::INVITES_DISABLED) {
            return false;
        }

        if ($config === self::INVITES_ENABLED) {
            return true;
        }

        if ($config === self::INVITES_OPEN_LIMITED) {
            return $this->isOpen();
        }

        if ($config === self::INVITES_INVITES_LIMITED) {
            return ! $this->isOverLimit();
        }

        return false;
    }

}
