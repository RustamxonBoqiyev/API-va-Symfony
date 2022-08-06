<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\UserFoctory;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserCreateAction extends AbstractController
{
    private UserFoctory $userFoctory;

    public function __construct(UserFoctory $userFoctory)
    {

    }

    public function __invoke(User $data): void
    {
        $user =$this->userFactory->create($data->getEmail(), $data->getPassword());

        print_r($user);
        exit;
    }
}