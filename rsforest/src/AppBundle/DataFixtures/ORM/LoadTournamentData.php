<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Tournament;

class LoadTournamentData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tournament01 = new Tournament();
        $tournament01->setDate(new \DateTime('21-05-2016'));

        $tournament02 = new Tournament();
        $tournament02->setDate(new \DateTime('22-05-2016'));

        $manager->persist($tournament01);
        $manager->persist($tournament02);

        $manager->flush();

        $this->addReference('tournament01', $tournament01);
        $this->addReference('tournament02', $tournament02);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 11;
    }
}