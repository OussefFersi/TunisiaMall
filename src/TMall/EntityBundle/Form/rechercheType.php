<?php

namespace TMall\EntityBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class rechercheType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder->add('recherche','text');
        
    }
   
    
    public function getName() {
        return 'tmall_entitybundle_recherche';
    }

}