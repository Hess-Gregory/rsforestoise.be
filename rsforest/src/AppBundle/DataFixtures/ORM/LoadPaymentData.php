<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Payment;

class LoadPaymentData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $payment01 = new Payment();
        $payment01->setAmount(200)
                  ->setType('Comptant')
                  ->setDate(new \DateTime('26-10-2014'))
                  ->setPlayer($this->getReference('player01'));

        $payment02 = new Payment();
        $payment02->setAmount(110)
                  ->setType('Virement')
                  ->setDate(new \DateTime('10-01-2015'))
                  ->setPlayer($this->getReference('player01'));

        $payment03 = new Payment();
        $payment03->setAmount(300)
                  ->setType('Comptant')
                  ->setDate(new \DateTime('01-06-2015'))
                  ->setPlayer($this->getReference('player02'));

        $manager->persist($payment01);
        $manager->persist($payment02);
        $manager->persist($payment03);

        $manager->flush();

        $this->addReference('payment01', $payment01);
        $this->addReference('payment02', $payment02);
        $this->addReference('payment03', $payment03);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 7;
    }
}