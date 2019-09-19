<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayerAddType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'required' => true,
                'label' => 'Nom',
                'attr' => array(
                    'placeholder' => 'Ex : Buchanan',
                )
            ))
            ->add('firstName', 'text', array(
                'required' => true,
                'label' => 'Prénom',
                'attr' => array(
                    'placeholder' => 'Ex : Daniel',
                )
            ))
            ->add('street', 'text', array(
                'required' => false,
                'label' => 'Rue',
                'attr' => array(
                    'placeholder' => 'Ex : Rue de la Tulipe',
                )
            ))
            ->add('numberStreet', 'text', array(
                'required' => false,
                'label' => 'N°',
                'attr' => array(
                    'placeholder' => 'Ex : 29',
                )
            ))
            ->add('mailbox', 'text', array(
                'required' => false,
                'label' => 'Boîte',
                'attr' => array(
                    'placeholder' => 'Ex : 2C',
                )
            ))
            ->add('postalCode', 'text', array(
                'required' => false,
                'label' => 'Code Postal',
                'attr' => array(
                    'placeholder' => 'Ex : 1030',
                )
            ))
            ->add('city', 'text', array(
                'required' => false,
                'label' => 'Ville',
                'attr' => array(
                    'placeholder' => 'Ex : Ixelles',
                )
            ))
            ->add('email', 'text', array(
                'required' => false,
                'label' => 'Email',
                'attr' => array(
                    'placeholder' => 'Ex : buchanan.daniel@gmail.com',
                )
            ))
            ->add('phone', 'text', array(
                'required' => true,
                'label' => 'Tél',
                'attr' => array(
                    'placeholder' => 'Ex : 0485/549878',
                )
            ))
            ->add('responsiblePhone', 'text', array(
                'required' => true,
                'label' => 'Téléphone d\'un responsable',
                'attr' => array(
                    'placeholder' => 'Téléphone d\'une personne responsable',
                )
            ))
            ->add('dateArrival', 'date', array(
                'required' => true,
                'input'  => 'datetime',
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'label' => 'Date d\'Arrivée',
                'attr' => array(
                    'placeholder' => 'Ex : dd/mm/yyyy',
                )
            ))
            ->add('from', 'text', array(
                'required' => false,
                'label' => 'Provenance',
                'attr' => array(
                    'placeholder' => 'Ex : R.C. De Schaerbeek',
                )
            ))
            ->add('variousInformation', 'text', array(
                'required' => false,
                'label' => 'Infos',
                'attr' => array(
                    'placeholder' => 'Ex : Très bon côté droit',
                )
            ))
            ->add('team', 'entity', array(
                'required' => false,
                'class' => 'AppBundle:Team',
                'choice_label' => 'name'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Player'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_player_add';
    }
}
