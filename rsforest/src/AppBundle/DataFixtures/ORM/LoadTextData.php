<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Text;

class LoadTextData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $text01 = new Text();
        $text01->setNumber('1')
               ->setContent('<p>Procedente igitur mox tempore cum adventicium nihil inveniretur, relicta ora maritima in Lycaoniam adnexam Isauriae se contulerunt ibique densis intersaepientes itinera praetenturis provincialium et viatorum opibus pascebantur.</p>')
               ->setPage($this->getReference('page01'));

        $text02 = new Text();
        $text02->setNumber('2')
               ->setContent('<p>Le club existe depuis 2014, c\'est une idée qui était en attente depuis plus de 10 ans et qui s\'est enfin réalisée. Car après constat les jeunes de Forest devaient se déplacer loin pour jouer, d\'où la création de notre Club. Nous avons une équipe dynamique et motivée pour accueillir tous les jeunes désirant pratiquer leur sport favori, le football.</p>')
               ->setPage($this->getReference('page01'));

        $text03 = new Text();
        $text03->setNumber('1')
               ->setContent('<p>Conditions générales</p>')
               ->setPage($this->getReference('page08'));

        $manager->persist($text01);
        $manager->persist($text02);
        $manager->persist($text03);

        $manager->flush();

        $this->addReference('text01', $text01);
        $this->addReference('text02', $text02);
        $this->addReference('text03', $text03);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}