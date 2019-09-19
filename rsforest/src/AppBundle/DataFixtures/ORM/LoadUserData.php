<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;
 
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user01 = $userManager->createUser();
        $user01->setUsername('mathieu')
               ->setEmail('thiry.math@gmail.com')
               ->setPlainPassword('mathieuthomas')
             //->setPassword('3NCRYPT3D-V3R51ON');
               ->setEnabled(true)
               ->setRoles(array('ROLE_SUPER_ADMIN'));

        $user02 = $userManager->createUser();
        $user02->setUsername('momo')
               ->setEmail('mohamednour11@hotmail.com')
               ->setPlainPassword('B5gbx')
             //->setPassword('3NCRYPT3D-V3R51ON');
               ->setEnabled(true)
               ->setRoles(array('ROLE_SUPER_ADMIN'));

        $user03 = $userManager->createUser();
        $user03->setUsername('user01')
               ->setEmail('user01@gmail.com')
               ->setPlainPassword('GveXw')
             //->setPassword('3NCRYPT3D-V3R51ON');
               ->setEnabled(true)
               ->setRoles(array('ROLE_ADMIN'));

        $userManager->updateUser($user01, true);
        $userManager->updateUser($user02, true);
        $userManager->updateUser($user03, true);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 14;
    }
}