<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\SEO;

class LoadSEOData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seo01 = new SEO();
        $seo01->setTitle('Renaissance Sportive Forestoise (RSF), votre Club de Football à Forest - Bruxelles')
              ->setDescription('RSF est un club de football pour tous les ages se situant à Forest');

        $seo02 = new SEO();
        $seo02->setTitle('Toutes les équipes "Jeunes" de la Renaissance Sportive Forestoise')
              ->setDescription('Une liste complète de toutes les équipes de U6 à U21 de la RSF');

        $seo03 = new SEO();
        $seo03->setTitle('Toutes les équipes "Première" de la RSF')
              ->setDescription('Une liste complète de toutes les équipes de la Renaissance Sportive Forestoise');

        $seo04 = new SEO();
        $seo04->setTitle('Inscription au club de Football Renaissance Sportive Forestoise situé à Forest')
              ->setDescription('Formulaire d\'inscription au club de foot RSF');

        $seo05 = new SEO();
        $seo05->setTitle('Inscription aux Tournois organisés par la RSF (Renaissance Sportive Forestoise)')
              ->setDescription('Formulaire d\'inscription au club de foot Renaissance Sportive Forestoise');

        $seo06 = new SEO();
        $seo06->setTitle('Tout le Comité du Club de la Renaissance Sportive Forestoise à Forest')
              ->setDescription('Liste complète de tous les membres du comité de la RSF');

        $manager->persist($seo01);
        $manager->persist($seo02);
        $manager->persist($seo03);
        $manager->persist($seo04);
        $manager->persist($seo05);
        $manager->persist($seo06);
        $manager->flush();

        $this->addReference('seo01', $seo01);
        $this->addReference('seo02', $seo02);
        $this->addReference('seo03', $seo03);
        $this->addReference('seo04', $seo04);
        $this->addReference('seo05', $seo05);
        $this->addReference('seo06', $seo06);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}