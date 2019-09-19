<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Page;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $page01 = new Page();
        $page01->setName('Accueil')
               ->setRoutingName('front_end_homepage_default')
               ->setSeo($this->getReference('seo01'));

        $page02 = new Page();
        $page02->setName('Actualités')
               ->setRoutingName('front_end_actuality_default');

        $page03 = new Page();
        $page03->setName('Equipes - Jeunes')
               ->setRoutingName('front_end_team_young_default')
               ->setSeo($this->getReference('seo02'));

        $page04 = new Page();
        $page04->setName('Equipes - Jeunes Description')
               ->setRoutingName('front_end_team_young_description');

        $page05 = new Page();
        $page05->setName('Equipes - Première')
               ->setRoutingName('front_end_team_first_default')
               ->setSeo($this->getReference('seo03'));

        $page06 = new Page();
        $page06->setName('Equipes - Première Description')
               ->setRoutingName('front_end_team_first_description');

        $page07 = new Page();
        $page07->setName('Inscription')
               ->setRoutingName('front_end_registration_default')
               ->setSeo($this->getReference('seo04'));

        $page08 = new Page();
        $page08->setName('Tournois')
               ->setRoutingName('front_end_tournament_default')
               ->setSeo($this->getReference('seo05'));

        $page09 = new Page();
        $page09->setName('Comité du Club')
               ->setRoutingName('front_end_committee_default')
               ->setSeo($this->getReference('seo06'));

        $manager->persist($page01);
        $manager->persist($page02);
        $manager->persist($page03);
        $manager->persist($page04);
        $manager->persist($page05);
        $manager->persist($page06);
        $manager->persist($page07);
        $manager->persist($page08);
        $manager->persist($page09);
        $manager->flush();

        $this->addReference('page01', $page01);
        $this->addReference('page02', $page02);
        $this->addReference('page03', $page03);
        $this->addReference('page04', $page04);
        $this->addReference('page05', $page05);
        $this->addReference('page06', $page06);
        $this->addReference('page07', $page07);
        $this->addReference('page08', $page08);
        $this->addReference('page09', $page09);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}