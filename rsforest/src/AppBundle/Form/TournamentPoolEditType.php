<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TournamentPoolEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('team', 'text', array(
                'required' => false,
                'label' => 'Equipes',
                'attr' => array(
                    'placeholder' => 'Ex : U8 (2008) - U9 (2007)',
                )
            ))
            ->add('time', 'text', array(
                'required' => false,
                'label' => 'Heures',
                'attr' => array(
                    'placeholder' => 'Ex : 9h30 - 12h30',
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
            'data_class' => 'AppBundle\Entity\TournamentPool'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_tournament_pool_edit';
    }
}
