<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Price;

class LoadPriceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $price01 = new Price();
        $price01->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2015'))
                ->setDateEnd(new \DateTime('31-05-2016'));

        $price02 = new Price();
        $price02->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2016'))
                ->setDateEnd(new \DateTime('31-05-2017'));

        $price03 = new Price();
        $price03->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2017'))
                ->setDateEnd(new \DateTime('31-05-2018'));

        $price04 = new Price();
        $price04->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2018'))
                ->setDateEnd(new \DateTime('31-05-2019'));

        $price05 = new Price();
        $price05->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2019'))
                ->setDateEnd(new \DateTime('31-05-2020'));

        $price06 = new Price();
        $price06->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2020'))
                ->setDateEnd(new \DateTime('31-05-2021'));

        $price07 = new Price();
        $price07->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2021'))
                ->setDateEnd(new \DateTime('31-05-2022'));

        $price08 = new Price();
        $price08->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2022'))
                ->setDateEnd(new \DateTime('31-05-2023'));

        $price09 = new Price();
        $price09->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2023'))
                ->setDateEnd(new \DateTime('31-05-2024'));

        $price10 = new Price();
        $price10->setPrice(300)
                ->setDateStart(new \DateTime('01-06-2024'))
                ->setDateEnd(new \DateTime('31-05-2025'));

        $manager->persist($price01);
        $manager->persist($price02);
        $manager->persist($price03);
        $manager->persist($price04);
        $manager->persist($price05);
        $manager->persist($price06);
        $manager->persist($price07);
        $manager->persist($price08);
        $manager->persist($price09);
        $manager->persist($price10);

        $manager->flush();

        $this->addReference('price01', $price01);
        $this->addReference('price02', $price02);
        $this->addReference('price03', $price03);
        $this->addReference('price04', $price04);
        $this->addReference('price05', $price05);
        $this->addReference('price06', $price06);
        $this->addReference('price07', $price07);
        $this->addReference('price08', $price08);
        $this->addReference('price09', $price09);
        $this->addReference('price10', $price10);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }
}