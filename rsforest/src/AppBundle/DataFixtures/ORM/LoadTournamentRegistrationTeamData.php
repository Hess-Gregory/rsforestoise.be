<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\TournamentRegistrationTeam;

class LoadTournamentRegistrationTeamData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tournamentRegistrationTeam01 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam01->setName('U6-1');

        $tournamentRegistrationTeam02 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam02->setName('U6-2');

        $tournamentRegistrationTeam03 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam03->setName('U7-1');

        $tournamentRegistrationTeam04 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam04->setName('U7-2');

        $tournamentRegistrationTeam05 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam05->setName('U8-1');

        $tournamentRegistrationTeam06 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam06->setName('U8-2');

        $tournamentRegistrationTeam07 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam07->setName('U9-1');

        $tournamentRegistrationTeam08 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam08->setName('U9-2');

        $tournamentRegistrationTeam09 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam09->setName('U10-1');

        $tournamentRegistrationTeam10 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam10->setName('U10-2');

        $tournamentRegistrationTeam11 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam11->setName('U11-1');

        $tournamentRegistrationTeam12 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam12->setName('U11-2');

        $tournamentRegistrationTeam13 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam13->setName('U12-1');

        $tournamentRegistrationTeam14 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam14->setName('U12-2');

        $tournamentRegistrationTeam15 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam15->setName('U13-1');

        $tournamentRegistrationTeam16 = new TournamentRegistrationTeam();
        $tournamentRegistrationTeam16->setName('U13-2');

        $manager->persist($tournamentRegistrationTeam01);
        $manager->persist($tournamentRegistrationTeam02);
        $manager->persist($tournamentRegistrationTeam03);
        $manager->persist($tournamentRegistrationTeam04);
        $manager->persist($tournamentRegistrationTeam05);
        $manager->persist($tournamentRegistrationTeam06);
        $manager->persist($tournamentRegistrationTeam07);
        $manager->persist($tournamentRegistrationTeam08);
        $manager->persist($tournamentRegistrationTeam09);
        $manager->persist($tournamentRegistrationTeam10);
        $manager->persist($tournamentRegistrationTeam11);
        $manager->persist($tournamentRegistrationTeam12);
        $manager->persist($tournamentRegistrationTeam13);
        $manager->persist($tournamentRegistrationTeam14);
        $manager->persist($tournamentRegistrationTeam15);
        $manager->persist($tournamentRegistrationTeam16);

        $manager->flush();

        $this->addReference('tournamentRegistrationTeam01', $tournamentRegistrationTeam01);
        $this->addReference('tournamentRegistrationTeam02', $tournamentRegistrationTeam02);
        $this->addReference('tournamentRegistrationTeam03', $tournamentRegistrationTeam03);
        $this->addReference('tournamentRegistrationTeam04', $tournamentRegistrationTeam04);
        $this->addReference('tournamentRegistrationTeam05', $tournamentRegistrationTeam05);
        $this->addReference('tournamentRegistrationTeam06', $tournamentRegistrationTeam06);
        $this->addReference('tournamentRegistrationTeam07', $tournamentRegistrationTeam07);
        $this->addReference('tournamentRegistrationTeam08', $tournamentRegistrationTeam08);
        $this->addReference('tournamentRegistrationTeam09', $tournamentRegistrationTeam09);
        $this->addReference('tournamentRegistrationTeam10', $tournamentRegistrationTeam10);
        $this->addReference('tournamentRegistrationTeam11', $tournamentRegistrationTeam11);
        $this->addReference('tournamentRegistrationTeam12', $tournamentRegistrationTeam12);
        $this->addReference('tournamentRegistrationTeam13', $tournamentRegistrationTeam13);
        $this->addReference('tournamentRegistrationTeam14', $tournamentRegistrationTeam14);
        $this->addReference('tournamentRegistrationTeam15', $tournamentRegistrationTeam15);
        $this->addReference('tournamentRegistrationTeam16', $tournamentRegistrationTeam16);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 13;
    }
}