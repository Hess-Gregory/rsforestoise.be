<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationAddType extends AbstractType
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
                    'placeholder' => 'Votre Nom',
                )
            ))
            ->add('firstName', 'text', array(
                'required' => true,
                'label' => 'Prénom',
                'attr' => array(
                    'placeholder' => 'Votre Prénom',
                )
            ))
            ->add('dateBirth', 'date', array(
                'required' => true,
                'input'  => 'datetime',
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'label' => 'Date de Naissance',
                'attr' => array(
                    'placeholder' => 'Ex : dd/mm/yyyy',
                )
            ))
            ->add('birthplace', 'text', array(
                'required' => true,
                'label' => 'Lieu de Naissance',
                'attr' => array(
                    'placeholder' => 'Ex : Berkane',
                )
            ))
            ->add('street', 'text', array(
                'required' => true,
                'label' => 'Rue',
                'attr' => array(
                    'placeholder' => 'Ex : Rue de la Tulipe',
                )
            ))
            ->add('numberStreet', 'text', array(
                'required' => true,
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
                'required' => true,
                'label' => 'Code Postal',
                'attr' => array(
                    'placeholder' => 'Ex : 1030',
                )
            ))
            ->add('city', 'text', array(
                'required' => true,
                'label' => 'Ville',
                'attr' => array(
                    'placeholder' => 'Ex : Ixelles',
                )
            ))
            ->add('email', 'email', array(
                'required' => true,
                'label' => 'E-mail',
                'attr' => array(
                    'placeholder' => 'Votre E-mail',
                )
            ))
            ->add('email', 'repeated', array(
                'type' => 'email',
                'invalid_message' => 'Les champs E-mail doivent concorder',
                'required' => true,
                'first_options'  => array(
                    'label' => 'E-mail',
                    'attr' => array(
                    'placeholder' => 'Votre E-mail',
                )
                ),
                'second_options' => array(
                    'label' => 'Confirmation E-mail',
                    'attr' => array(
                    'placeholder' => 'Confirmation de votre E-mail',
                )
                ),
            ))
            ->add('phone', 'text', array(
                'required' => true,
                'label' => 'Téléphone',
                'attr' => array(
                    'placeholder' => 'Votre Téléphone',
                )
            ))
            ->add('responsiblePhone', 'text', array(
                'required' => true,
                'label' => 'Téléphone d\'un responsable',
                'attr' => array(
                    'placeholder' => 'Téléphone d\'une personne responsable',
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
            'data_class' => 'AppBundle\Entity\Registration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_registration_add';
    }
}
