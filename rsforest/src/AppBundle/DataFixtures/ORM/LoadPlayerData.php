<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Player;

class LoadPlayerData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $player01 = new Player();
        $player01->setName('Buchanan')
                 ->setFirstName('Daniel')
                 ->setStreet('Avenue de la Bourse')
                 ->setNumberStreet('29')
                 ->setMailbox('2C')
                 ->setPostalCode('1030')
                 ->setCity('Ixelles')
                 ->setEmail('buchanan.daniel@gmail.com')
                 ->setPhone('0485/549878')
                 ->setDateArrival(new \DateTime('16-04-2015'))
                 ->setFrom('')
                 ->setVariousInformation('Très bon côté droit')
                 ->setTeam($this->getReference('team01'));

        $player02 = new Player();
        $player02->setName('Guthrie')
                 ->setFirstName('Brennan')
                 ->setStreet('rue de la Charité')
                 ->setNumberStreet('154')
                 ->setMailbox('17')
                 ->setPostalCode('1000')
                 ->setCity('Bruxelles')
                 ->setEmail('guthrie@orange.com')
                 ->setPhone('0488/654821')
                 ->setDateArrival(new \DateTime('21-08-2015'))
                 ->setFrom('Crossing Schaerbeek')
                 ->setVariousInformation('Très bon en attaque')
                 ->setTeam($this->getReference('team01'));

        $player03 = new Player();
        $player03->setName('Goodman')
                 ->setFirstName('Rahim')
                 ->setStreet('')
                 ->setNumberStreet('')
                 ->setMailbox('')
                 ->setPostalCode('')
                 ->setCity('')
                 ->setEmail('rahim@hotmail.com')
                 ->setPhone('0494/123548')
                 ->setDateArrival(new \DateTime('05-11-2015'))
                 ->setFrom('R.C. De Schaerbeek')
                 ->setVariousInformation('')
                 ->setTeam($this->getReference('team01'));

        $player04 = new Player();
        $player04->setName('Davenport')
                 ->setFirstName('Tobias')
                 ->setStreet('')
                 ->setNumberStreet('')
                 ->setMailbox('')
                 ->setPostalCode('')
                 ->setCity('')
                 ->setEmail('tob@gmail.com')
                 ->setPhone('010/452135')
                 ->setDateArrival(new \DateTime('07-01-2014'))
                 ->setFrom('')
                 ->setVariousInformation('')
                 ->setTeam($this->getReference('team02'));

        $player05 = new Player();
        $player05->setName('Hewitt')
                 ->setFirstName('Kuame')
                 ->setStreet('')
                 ->setNumberStreet('')
                 ->setMailbox('')
                 ->setPostalCode('')
                 ->setCity('')
                 ->setEmail('kuamehewitt@gmail.com')
                 ->setPhone('010/875421')
                 ->setDateArrival(new \DateTime('14-05-2015'))
                 ->setFrom('')
                 ->setVariousInformation('')
                 ->setTeam($this->getReference('team02'));

        $player06 = new Player();
        $player06->setName('Bertram')
                 ->setFirstName('Paul')
                 ->setStreet('')
                 ->setNumberStreet('')
                 ->setMailbox('')
                 ->setPostalCode('')
                 ->setCity('')
                 ->setEmail('tob@gmail.com')
                 ->setPhone('010/452135')
                 ->setDateArrival(new \DateTime('11-07-2014'))
                 ->setFrom('R.C. De Schaerbeek')
                 ->setVariousInformation('Notre meilleur joueur')
                 ->setTeam($this->getReference('team17'));

        $player07 = new Player();
        $player07->setName('Wafi')
                 ->setFirstName('Christian')
                 ->setStreet('')
                 ->setNumberStreet('')
                 ->setMailbox('')
                 ->setPostalCode('')
                 ->setCity('')
                 ->setEmail('chris@gmail.com')
                 ->setPhone('0497/653248')
                 ->setDateArrival(new \DateTime('29-08-2015'))
                 ->setFrom('')
                 ->setVariousInformation('')
                 ->setTeam($this->getReference('team17'));

        $manager->persist($player01);
        $manager->persist($player02);
        $manager->persist($player03);
        $manager->persist($player04);
        $manager->persist($player05);
        $manager->persist($player06);
        $manager->persist($player07);

        $manager->flush();

        $this->addReference('player01', $player01);
        $this->addReference('player02', $player02);
        $this->addReference('player03', $player03);
        $this->addReference('player04', $player04);
        $this->addReference('player05', $player05);
        $this->addReference('player06', $player06);
        $this->addReference('player07', $player07);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 6;
    }
}