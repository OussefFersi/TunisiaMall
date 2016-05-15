<?php

namespace TMall\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BoutiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('photo', new FileType() , array('label' => 'Photo','attr' => array( 'class'=>'form-control input-sm') ))
             ->add('nom',new TextType(),array('label'=>'Name'))
             ->add('cordonne',new TextType(),array('label'=>'Coordonate'))
             ->add('save', new SubmitType(), array('label' => 'Create store','attr' => array( 'class'=>'btn btn-primary')))
        ->getForm();  
                
            // ...
        
    }

    
    public function getName() {
        return 'ProductType';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMallEntityBundle\Entity\Boutique',
        ));
    }
}