<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActualityAddType extends AbstractType
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
                    'placeholder' => 'Titre de l\'actualité',
                )
            ))
            ->add('createdAt', 'date', array(
                'input'  => 'datetime',
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                )
            ))
            ->add('content', 'textarea', array(
                'required' => false, // html5 "required" won't work with TinyMce, need to set to false
                'label' => 'Contenu',
            ))    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Actuality'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_actuality_add';
    }
}
