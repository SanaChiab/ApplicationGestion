<?php

namespace App\DataFixtures;

use App\Entity\Formulaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $formulaire = new Formulaire();
        $formulaire->setDestination('Destination #1');
        $formulaire->setClient('Client #1');
        $formulaire->setRaison('Raison #1');
        $formulaire->setDateDépart($formulaire ['date']);
        $formulaire->setDateRetour($formulaire ['date']);

        // On la persiste
        $manager->persist($formulaire);

        // On la déclange l'enregistrements
        $manager->flush();
    }
}
