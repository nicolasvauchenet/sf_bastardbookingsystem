<?php

namespace App\DataFixtures;

use App\DataFixtures\Band\BandTrait;
use App\Entity\Band;
use App\Entity\Genre;
use App\Entity\Style;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BandFixtures extends Fixture implements OrderedFixtureInterface
{
    use BandTrait;

    public function load(ObjectManager $manager): void
    {
        $allBands = [
            self::BANDS,
        ];

        foreach($allBands as $bands) {
            foreach($bands as $data) {
                $band = (new Band())
                    ->setName($data['name'])
                    ->setDescription($data['description'] ?? null)
                    ->setLogo($data['logo'] ?? null)
                    ->setPhoto($data['photo'] ?? null)
                    ->setLineup($data['lineup'])
                    ->setBaseFee($data['baseFee'] ?? null)
                    ->setGenre($this->getReference($data['genre'], Genre::class))
                    ->setStyle($data['style'] ? $this->getReference($data['style'], Style::class) : null);
                $manager->persist($band);
                $this->setReference('band_' . $data['reference'], $band);
            }
        }

        $manager->flush();
    }

    public function getOrder(): int
    {
        return 3;
    }
}
