<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFactory
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function create(string $email, string $password, string $name, string $surname, int $age): User
    {
        $user = new User();
        $user->setEmail($email);
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);
        $user->setName($name);
        $user->setSurname($surname);
        $user->setAge($age);

        return $user;
    }

}