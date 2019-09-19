<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TournamentRegistrationAddType extends AbstractType
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
            ->add('inCharge', 'text', array(
                'required' => true,
                'label' => 'Nom Responsable',
                'attr' => array(
                    'placeholder' => 'Le nom de la personne responsable',
                )
            ))
            ->add('registrationNumber', 'text', array(
                'required' => true,
                'label' => 'N° de Matricule',
                'attr' => array(
                    'placeholder' => 'Ex : 12654',
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
            ->add('tournamentRegistrationTeams', 'entity', array(
                'required' => true,
                'class' => 'AppBundle:TournamentRegistrationTeam',
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Equipes Participantes',
                'error_bubbling' => false,
            ))
            ->add('condition', 'choice', array(
                'choices' => array(
                    '1' => 'J\'accepte'
                ),
                'required' => true,
                'label' => 'Conditions Générales (*)',
                'expanded' => true,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TournamentRegistration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_tournament_registration_add';
    }
}
