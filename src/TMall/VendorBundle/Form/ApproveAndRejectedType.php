<?php

namespace TMall\VendorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use TMall\EntityBundle\commande;


class ApproveAndRejectedType extends AbstractType
{
    

    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder
            // ..
            
             ->add('approve', new SubmitType(), array('label' => 'Approve','attr' => array( 'class'=>'btn btn-primary'))) 
             ->add('reject', new SubmitType(), array('label' => 'Reject','attr' => array( 'class'=>'btn btn-danger')))
                
        ->getForm();  
                
            // ...
        
    }

    
    public function getName() {
        return 'ApproveAndRejectedType';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMallEntityBundle\Entity\commande',
        ));
    }
    
    
    
    
    
    
}

