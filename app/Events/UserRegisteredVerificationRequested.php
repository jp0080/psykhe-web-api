<?php

namespace App\Events;

use App\Models\User;

class UserRegisteredVerificationRequested
{
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
