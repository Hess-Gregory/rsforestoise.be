<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SEOEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'required' => false,
                'label' => 'Titre',
                'attr' => array(
                    'placeholder' => 'Ex : Titre',
                )
            ))
            ->add('description', 'text', array(
                'required' => false,
                'label' => 'Description',
                'attr' => array(
                    'placeholder' => 'Ex : Description',
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
            'data_class' => 'AppBundle\Entity\SEO'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'humaneco_appbundle_seo_edit';
    }
}
