<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\TeamStaff;

class LoadTeamStaffData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $staff01 = new TeamStaff();
        $staff01->setName('El Ganfoud')
                ->setFirstName('Rachid')
                ->setFunction('Directeur Sportif')
                ->setOrder(1)
                ->setTeam($this->getReference('team01'));

        $staff02 = new TeamStaff();
        $staff02->setName('Yousfi')
                ->setFirstName('Mohammed')
                ->setFunction('T1')
                ->setOrder(1)
                ->setTeam($this->getReference('team17'));

        $staff03 = new TeamStaff();
        $staff03->setName('Sarhrout')
                ->setFirstName('Youssef')
                ->setFunction('T2')
                ->setOrder(2)
                ->setTeam($this->getReference('team17'));

        $manager->persist($staff01);
        $manager->persist($staff02);
        $manager->persist($staff03);

        $manager->flush();

        $this->addReference('staff01', $staff01);
        $this->addReference('staff02', $staff02);
        $this->addReference('staff03', $staff03);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 9;
    }
}