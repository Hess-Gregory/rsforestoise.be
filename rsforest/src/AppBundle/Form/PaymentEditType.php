<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaymentEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', 'text', array(
                'required' => false,
                'label' => 'Montant',
                'attr' => array(
                    'placeholder' => 'Ex : 300',
                )
            ))
            ->add('type', 'choice', array(
                'choices' => array(
                    'Comptant' => 'Comptant',
                    'Virement' => 'Virement'
                ),
                'required' => true,
                'label' => 'Type',
                'attr' => array(
                    'placeholder' => 'Ex : Comptant',
                )
            ))
            ->add('date', 'date', array(
                'required' => false,
                'input'  => 'datetime',
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'label' => 'Date',
                'attr' => array(
                    'placeholder' => 'Ex : dd/mm/yyyy',
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
            'data_class' => 'AppBundle\Entity\Payment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_payment_edit';
    }
}
