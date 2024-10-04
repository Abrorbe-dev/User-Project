<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;

class UserFactory
{
    public function create(string $email, string $password, string $name, string $surname, int $age): User
    {
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setName($name);
        $user->setSurname($surname);
        $user->setAge($age);

        return $user;
    }

}