<?php

namespace App\DataFixtures;

use App\DataFixtures\Style\StyleTrait;
use App\Entity\Style;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class StyleFixtures extends Fixture implements OrderedFixtureInterface
{
    use StyleTrait;

    public function load(ObjectManager $manager): void
    {
        $allStyles = [
            self::STYLES,
        ];

        foreach($allStyles as $styles) {
            foreach($styles as $data) {
                $style = (new Style())
                    ->setName($data['name']);
                $manager->persist($style);
                $this->setReference('style_' . $data['reference'], $style);
            }
        }

        $manager->flush();
    }

    public function getOrder(): int
    {
        return 2;
    }
}
