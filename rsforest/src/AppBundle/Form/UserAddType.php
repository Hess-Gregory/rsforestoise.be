<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserAddType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
                'required' => true,
                'label' => 'Nom',
                'attr' => array(
                    'placeholder' => 'Ex : Patrick01',
                )
            ))
            ->add('email', 'email', array(
                'required' => true,
                'label' => 'Email',
                'attr' => array(
                    'placeholder' => 'Ex : patrick@hotmail.com',
                )
            ))
            ->add('password', 'password', array(
                'required' => true,
                'label' => 'Password',
                'attr' => array(
                    'placeholder' => 'Ex : ic2fpHhJaf',
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
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_user_add';
    }
}
