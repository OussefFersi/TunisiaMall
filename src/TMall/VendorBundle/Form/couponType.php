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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use TMall\EntityBundle\coupon;


class couponType extends AbstractType
{
    

    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder
            // ..
            
             ->add('idCategorie','entity', array('label'=>'Category','class' => 'TMallEntityBundle:categorie','property' => 'nom','expanded' => false,'multiple' => false))
              ->add('code',new TextType(), array('label'=>'Code'))
             ->add ('discount',new IntegerType(),array('label'=>'Discount %'))  
            ->add('description',new TextareaType(),array('label'=>'description')) 
             ->add('save', new SubmitType(), array('label' => 'Add Coupon','attr' => array( 'class'=>'btn btn-primary')))
                
        ->getForm();  
                
            // ...
        
    }

    
    public function getName() {
        return 'couponType';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMallEntityBundle\Entity\coupon',
        ));
    }
    
    
    
    
    
    
}

