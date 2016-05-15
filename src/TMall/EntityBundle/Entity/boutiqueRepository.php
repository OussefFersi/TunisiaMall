<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;


class boutiqueRepository extends EntityRepository
{
    
    
    public function findBoutiqueParameter($boutique){
        
        $query = $this->getEntityManager()
                ->createQuery("SELECT m FROM TMallEntityBundle:boutique m where m.nom =:boutique ");
        
        return $query->getResult();
        
    }
    
    public function recherche($chaine){
        
        
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.nom like :chaine')
                ->orderBy('u.id')
                ->setParameter('chaine',$chaine);
        
       return $qb->getQuery()->getResult();
 
        
        
        
    }
    
    
}

