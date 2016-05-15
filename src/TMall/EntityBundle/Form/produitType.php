<?php

namespace TMall\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class produitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text',array('label' => 'titre','attr' => array( 'class'=>'form-control input-sm') ))
            //->add('photo','iphp_file')
            //description
            ->add('description','textarea',array('label' => 'description','attr' => array( 'class'=>'form-control input-sm') ))    
            //description    
                
            ->add('quantity' ,'integer',array('label' => 'quantity','attr' => array( 'class'=>'form-control input-sm') ))
            ->add('prix','integer',array('label' => 'prix','attr' => array( 'class'=>'form-control input-sm') ))   
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMall\EntityBundle\Entity\produit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tmall_entitybundle_produit';
    }
}
