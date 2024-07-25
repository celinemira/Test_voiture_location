<?php

namespace App\DataFixtures;

use App\Entity\Advert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdvertFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $advert = new Advert();
            $advert->setTitle("Title $i");
            $advert->setDescription("Description $i");
            $advert->setCity("City $i");
            $advert->setCarYear(2010 + $i);
            $advert->setNbKm(1000 * $i);
            $advert->setNbDays(7);
            $advert->setPrice(100 * $i);
            $manager->persist($advert);
        }

        $manager->flush();
    }
}