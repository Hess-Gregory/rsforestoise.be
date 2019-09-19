<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Committee;

class LoadCommitteeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $committee01 = new Committee();
        $committee01->setName('Mabtoul')
                    ->setFirstName('Mohammed')
                    ->setPhone('0485 / 56 51 69')
                    ->setFunction('Président')
                    ->setOrder(1);

        $committee02 = new Committee();
        $committee02->setName('Elmadih')
                    ->setFirstName('Rachid')
                    ->setPhone('0485 / 27 54 77')
                    ->setFunction('Vice Président')
                    ->setOrder(2);

        $committee03 = new Committee();
        $committee03->setName('El Makhoukhi')
                    ->setFirstName('Ali')
                    ->setPhone('0484 / 18 01 61')
                    ->setFunction('Trésorier')
                    ->setOrder(5);

        $committee04 = new Committee();
        $committee04->setName('Mabtoul')
                    ->setFirstName('Mimoune')
                    ->setPhone('0475 / 23 71 00')
                    ->setFunction('Administrateur')
                    ->setOrder(3);

        $committee05 = new Committee();
        $committee05->setName('Ben Ayad Daoudi')
                    ->setFirstName('Rachid')
                    ->setPhone('0488 / 51 88 65')
                    ->setFunction('Administrateur')
                    ->setOrder(4);

        $committee06 = new Committee();
        $committee06->setName('Elmadih')
                    ->setFirstName('Rachid')
                    ->setPhone('0485 / 27 54 77')
                    ->setFunction('Correspondant Qualifié')
                    ->setOrder(6);

        $manager->persist($committee01);
        $manager->persist($committee02);
        $manager->persist($committee03);
        $manager->persist($committee04);
        $manager->persist($committee05);
        $manager->persist($committee06);

        $manager->flush();

        $this->addReference('committee01', $committee01);
        $this->addReference('committee02', $committee02);
        $this->addReference('committee03', $committee03);
        $this->addReference('committee04', $committee04);
        $this->addReference('committee05', $committee05);
        $this->addReference('committee06', $committee06);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 8;
    }
}