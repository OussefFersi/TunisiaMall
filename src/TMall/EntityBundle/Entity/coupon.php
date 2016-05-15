<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * coupon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\couponRepository")
 */
class coupon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   
    /**
     *
     * @ORM\ManyToOne(targetEntity="categorie")
     */
    private $idCategorie;

    /**
     * 
     *
     * @ORM\Column(name="code", type="string",length=255)
     * 
     * 
     * 
     */
    private $code;
    /**
     * @ORM\Column(name="discount",type="integer")
     * 
     */
    private $discount;
    
    
    /**
     * 
     * @ORM\Column(name="description",type="text")
     * 
     */
    private $description;
    
      
    public function getId() {
        return $this->id;
    }

    public function getIdCategorie() {
        return $this->idCategorie;
    }

    public function getCode() {
        return $this->code;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdCategorie($idCategorie) {
        $this->idCategorie = $idCategorie;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
      
    
    
}