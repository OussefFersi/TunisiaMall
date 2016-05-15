<?php

namespace TMall\EntityBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class packageType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
        $builder->add('photo','iphp_file');
        
    }
   
    
    public function getName() {
        return 'tmall_entitybundle_package';
    }

}
