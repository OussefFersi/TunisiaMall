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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use TMall\EntityBundle\commande;
use Symfony\Component\Validator\Constraints\Collection;


class CommandeType extends AbstractType
{
    

    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder
            // ..
            
             ->add('idProduit','entity', array('label'=>'Name Product','class' => 'TMallEntityBundle:produit','property' => 'titre','expanded' => false,'multiple' => false))
              ->add('idUser','entity', array('label'=>'Name User','class' => 'TMallEntityBundle:Utilisateur','property' => 'username','expanded' => false,'multiple' => false))
             ->add ('quantite',new IntegerType(),array('label'=>'Quantity'))  
            ->add('date',new DateType())
                ->add('isRejected',new IntegerType(),array('label'=>'Reject Order'))
            ->add ('prix',new IntegerType(),array('label'=>'Price')) 
       
             ->add('save', new SubmitType(), array('label' => 'Add Order','attr' => array( 'class'=>'btn btn-primary')))
                
        ->getForm();  
                
            // ...
        
    }

    
    public function getName() {
        return 'CommandeType';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        
        $collectionConstraint = new Collection(array(
            'recaptcha' => new Recaptcha(),
        ));
        
        
        
        
        $resolver->setDefaults(array(
            'data_class' => 'TMallEntityBundle\Entity\commande',
        ));
        
          return array(
            'data_class' => 'Acme\MyBundle\Entity\User',
            'validation_constraint' => $collectionConstraint,
        );
        
        
    }
    
    
    
    
    
    
}

