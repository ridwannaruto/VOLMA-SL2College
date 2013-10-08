<?php

namespace VolunteerManagementSystem\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use VolunteerManagementSystem\RegistrationBundle\Entity\User;

class EmailType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('email','email', array( 
            'label'  => 'Email Address',
            'attr'   =>  array(
                'class'   => 'login',
                'placeholder' => "enter your contact email"
                )
                
            ));
           $builder
                
            ->add('submit','submit', array(
                'label' => 'Save',
                'attr' => array(
                    'class' => 'button'
                )
                
            ));
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolunteerManagementSystem\RegistrationBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volunteermanagementsystem_registrationbundle_user';
    }
}