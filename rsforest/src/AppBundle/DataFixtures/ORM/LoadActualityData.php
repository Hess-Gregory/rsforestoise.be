<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Actuality;

class LoadActualityData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $actuality01 = new Actuality();
        $actuality01->setName('Cum sociis natoque penatibus et magnis dis parturient montes')
                  ->setCreatedAt(new \DateTime('15-11-2013'))
                  ->setUpdatedAt(new \DateTime('16-11-2013'))
                  ->setContent('Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sagittis quam arcu, non accumsan dui imperdiet vel. Praesent lectus nunc, tristique ac nibh id, finibus ullamcorper nisl. Mauris sed metus ut risus pellentesque venenatis at sed nulla. In venenatis elit dui, vel sollicitudin dui molestie varius. Integer et leo tristique, ultrices ex et, faucibus eros. Etiam sed nulla ac dui mollis rutrum ut efficitur neque. Nullam ac urna sit amet odio porttitor fermentum ac nec diam. Aliquam gravida consequat tristique.')
                  ->setSlug('cum-sociis-natoque-penatibus-et-magnis-dis-parturient-montes');

        $actuality02 = new Actuality();
        $actuality02->setName('Pourquoi l\'utiliser ?')
                  ->setCreatedAt(new \DateTime('03-02-2014'))
                  ->setUpdatedAt(new \DateTime('04-02-2014'))
                  ->setContent('On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme Du texte. ')
                  ->setSlug('pourquoi-l\'utiliser-?');

        $actuality03 = new Actuality();
        $actuality03->setName('Le Lorem Ipsum est simplement du faux texte')
                  ->setCreatedAt(new \DateTime('27-05-2014'))
                  ->setUpdatedAt(new \DateTime('28-05-2014'))
                  ->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.')
                  ->setSlug('le-lorem-ipsum-est-simplement-du-faux-texte');
                   
        $manager->persist($actuality01);
        $manager->persist($actuality02);
        $manager->persist($actuality03);
        $manager->flush();

        $this->addReference('actuality01', $actuality01);
        $this->addReference('actuality02', $actuality02);
        $this->addReference('actuality03', $actuality03);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
}