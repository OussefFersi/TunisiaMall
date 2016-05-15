<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */
class Basket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="QTE", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="TMall\EntityBundle\Entity\Utilisateur") 
     * @ORM\JoinColumn(name="ID_U", referencedColumnName="id")
     */
    private $ID_U; 
     /**
     * @ORM\ManyToOne(targetEntity="produit")  
     * @ORM\JoinColumn(name="ID_P", referencedColumnName="id")
     */
    private $ID_P;  
    
    
    function getQte() {
        return $this->qte;
    }

    function getId() {
        return $this->id;
    }

    function getID_U() {
        return $this->ID_U;
    }

    function getID_P() {
        return $this->ID_P;
    }

    function setQte($qte) {
        $this->qte = $qte;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setID_U($ID_U) {
        $this->ID_U = $ID_U;
    }

    function setID_P($ID_P) {
        $this->ID_P = $ID_P;
    }




}