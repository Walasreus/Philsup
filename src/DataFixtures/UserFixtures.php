<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++)
        {
            $user = new User();
            $user->setFirstname('Prénom ' . $i);
            $user->setLastname('Nom ' . $i);
            $user->setEmail('Email ' . $i);
            $user->setPassword('Mot de passe ' . $i);
            $user->setPhone('Téléphone ' . $i);
            $user->setAddress('Adresse ' . $i);
            $user->setJob('Job ' . $i);
            $user->setDescription('Description ' . $i);
            $user->setAvatar('Avatar ' . $i);

            $manager->persist($user);
        }
        $manager->flush();
    }
}
