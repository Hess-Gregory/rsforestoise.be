<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeamAddType extends AbstractType
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
                    'placeholder' => 'Nom de l\'équipe',
                )
            ))
            ->add('type', 'choice', array(
                'choices' => array(
                    'young' => 'Jeunes',
                    'first' => 'Première'
                ),
                'required' => true,
                'label' => 'Type',
                'attr' => array(
                    'placeholder' => 'Type d\'équipe',
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
            'data_class' => 'AppBundle\Entity\Team'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_team_add';
    }
}
