<?php

namespace App\DataFixtures;

use App\DataFixtures\Band\BandTrait;
use App\DataFixtures\Genre\GenreTrait;
use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture implements OrderedFixtureInterface
{
    use GenreTrait;

    public function load(ObjectManager $manager): void
    {
        $allGenres = [
            self::GENRES,
        ];

        foreach($allGenres as $genres) {
            foreach($genres as $data) {
                $genre = (new Genre())
                    ->setName($data['name']);
                $manager->persist($genre);
                $this->setReference('genre_' . $data['reference'], $genre);
            }
        }

        $manager->flush();
    }

    public function getOrder(): int
    {
        return 1;
    }
}
