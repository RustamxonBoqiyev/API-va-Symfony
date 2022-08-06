<?php

declare(strict_types=1);

namespace App\Component\User;

class UserFoctory
{
    public function create(string $email, string $password): User
    {
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);

        return $user;
    }
}