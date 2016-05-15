<?php

namespace TMall\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('recherche', "text" , array('label' => 'Find your store','attr' => array( 'class'=>'form-control input-sm') ))
            ->add('save', new SubmitType(), array('label' => 'Search','attr' => array( 'class'=>'btn btn-primary')))    
        ->getForm();  
                
            // ...
        
    }

    
    public function getName() {
        return 'RechercheType';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMallClientBundle\Form\RechercheType',
        ));
    }
}

