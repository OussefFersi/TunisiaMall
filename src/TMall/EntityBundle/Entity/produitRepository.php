<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * produitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class produitRepository extends EntityRepository
{
   public function findByBoutique($boutique)
{
    $query = $this->getEntityManager()
        ->createQuery(
            'SELECT p FROM TMallEntityBundle:produit p
            
            WHERE p.boutique= :boutique'
        )->setParameter('boutique', $boutique);

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
}
  public function recherche($chaine){
      
       $query = $this->getEntityManager()
        ->createQuery(
            'SELECT p From TMallEntityBundle:produit p
            
            WHERE 
            
              p.titre= :chaine'                
                
        )
          ->setParameter('chaine', $chaine);

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
      /*
      $qb=$this->createQueryBuilder('u')
      ->select('u')
      ->where('u.titre like :chaine')
      ->orderBy('u.id')
      ->setParameter('chaine', $chaine); 
      
      return $qb->getQuery()->getResult();*/
  }

}