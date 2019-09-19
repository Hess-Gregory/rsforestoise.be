<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Team;

class LoadTeamData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $team01 = new Team();
        $team01->setName('U06-1')
               ->setType('young');

        $team02 = new Team();
        $team02->setName('U07-1')
               ->setType('young');

        $team03 = new Team();
        $team03->setName('U07-2')
               ->setType('young');

        $team04 = new Team();
        $team04->setName('U08-1')
               ->setType('young');

        $team05 = new Team();
        $team05->setName('U08-2')
               ->setType('young');

        $team06 = new Team();
        $team06->setName('U09-1')
               ->setType('young');

        $team07 = new Team();
        $team07->setName('U09-2')
               ->setType('young');

        $team08 = new Team();
        $team08->setName('U10-1')
               ->setType('young');

        $team09 = new Team();
        $team09->setName('U10-2')
               ->setType('young');

        $team10 = new Team();
        $team10->setName('U11-1')
               ->setType('young');

        $team11 = new Team();
        $team11->setName('U11-2')
               ->setType('young');

        $team12 = new Team();
        $team12->setName('U12-1')
               ->setType('young');

        $team13 = new Team();
        $team13->setName('U13-1')
               ->setType('young');

        $team14 = new Team();
        $team14->setName('U15-1')
               ->setType('young');

        $team15 = new Team();
        $team15->setName('U17-1')
               ->setType('young');

        $team16 = new Team();
        $team16->setName('U21-1')
               ->setType('young');

        $team17 = new Team();
        $team17->setName('F01-1')
               ->setType('first');
                   
        $manager->persist($team01);
        $manager->persist($team02);
        $manager->persist($team03);
        $manager->persist($team04);
        $manager->persist($team05);
        $manager->persist($team06);
        $manager->persist($team07);
        $manager->persist($team08);
        $manager->persist($team09);
        $manager->persist($team10);
        $manager->persist($team11);
        $manager->persist($team12);
        $manager->persist($team13);
        $manager->persist($team14);
        $manager->persist($team15);
        $manager->persist($team16);
        $manager->persist($team17);
        $manager->flush();

        $this->addReference('team01', $team01);
        $this->addReference('team02', $team02);
        $this->addReference('team03', $team03);
        $this->addReference('team04', $team04);
        $this->addReference('team05', $team05);
        $this->addReference('team06', $team06);
        $this->addReference('team07', $team07);
        $this->addReference('team08', $team08);
        $this->addReference('team09', $team09);
        $this->addReference('team10', $team10);
        $this->addReference('team11', $team11);
        $this->addReference('team12', $team12);
        $this->addReference('team13', $team13);
        $this->addReference('team14', $team14);
        $this->addReference('team15', $team15);
        $this->addReference('team16', $team16);
        $this->addReference('team17', $team17);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5;
    }
}