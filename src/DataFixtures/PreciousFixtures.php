<?php

namespace App\DataFixtures;

use App\Entity\Precious;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PreciousFixtures extends Fixture
{
    const DATA = [
        [
            'name' => "My first precious item",
            'description' => "The description of my first item"
        ],

        [
            'name' => "My second precious item",
            'description' => "The description of my second item"
        ],
        ];
    public function load(ObjectManager $manager): void
    {
            foreach (self::DATA as $item)
            {
                // instance entité
                $precious = new Precious;

                //affectation données
                $precious->setName ( $item['name']);
                $precious->setDescription( $item['description']);

                $manager->persist ( $precious);
            }

        $manager->flush();
    }
}
