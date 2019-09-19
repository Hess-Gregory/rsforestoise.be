<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\TournamentPool;

class LoadTournamentPoolData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tournamentPool01 = new TournamentPool();
        $tournamentPool01->setTeam('U8 (2008) - U9 (2007)')
                         ->setTime('9h30 - 12h30')
                         ->setTournament($this->getReference('tournament01'));

        $tournamentPool02 = new TournamentPool();
        $tournamentPool02->setTeam('U6 (2010) - U7 (2009)')
                         ->setTime('13h30 - 16h30')
                         ->setTournament($this->getReference('tournament01'));

        $tournamentPool03 = new TournamentPool();
        $tournamentPool03->setTeam('U10 (2006) - U11 (2005)')
                         ->setTime('13h30 - 16h30')
                         ->setTournament($this->getReference('tournament02'));

        $tournamentPool04 = new TournamentPool();
        $tournamentPool04->setTeam('U12 (2004) - U13 (2003)')
                         ->setTime('9h30 - 12h30')
                         ->setTournament($this->getReference('tournament02'));

        $manager->persist($tournamentPool01);
        $manager->persist($tournamentPool02);
        $manager->persist($tournamentPool03);
        $manager->persist($tournamentPool04);

        $manager->flush();

        $this->addReference('tournamentPool01', $tournamentPool01);
        $this->addReference('tournamentPool02', $tournamentPool02);
        $this->addReference('tournamentPool03', $tournamentPool03);
        $this->addReference('tournamentPool04', $tournamentPool04);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 12;
    }
}