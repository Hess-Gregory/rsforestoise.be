<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommitteeAddType extends AbstractType
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
                    'placeholder' => 'Ex : Mabtoul',
                )
            ))
            ->add('firstName', 'text', array(
                'required' => true,
                'label' => 'Prénom',
                'attr' => array(
                    'placeholder' => 'Ex : Mohammed',
                )
            ))
            ->add('phone', 'text', array(
                'required' => true,
                'label' => 'Tél',
                'attr' => array(
                    'placeholder' => 'Ex : 0485 / 56 51 69',
                )
            ))
            ->add('function', 'text', array(
                'required' => true,
                'label' => 'Fonction',
                'attr' => array(
                    'placeholder' => 'Ex : Président',
                )
            ))
            ->add('order', 'text', array(
                'required' => true,
                'label' => 'Ordre',
                'attr' => array(
                    'placeholder' => 'Ex : 1',
                )
            ))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Committee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_committee_add';
    }
}
