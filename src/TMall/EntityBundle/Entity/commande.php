<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\commandeRepository")
 */
class commande
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
     * @ORM\ManyToOne(targetEntity="TMall\EntityBundle\Entity\Utilisateur")
     */
    private $idUser;
    /**
     *
     * @ORM\ManyToOne(targetEntity="produit")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @ORM\Column(name="quantite",type="integer")
     * 
     */
    private $quantite;
    
    
    /**
     * 
     * @ORM\Column(name="isRejected",type="integer")
     * 
     */
    private $isRejected;
    
      /**
     * 
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    public function getQuantite() {
        return $this->quantite;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

        /**
     * Set idUser
     *
     * @param integer $idUser
     * @return commande
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     * @return commande
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return commande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    
    public function getIsRejected() {
        return $this->isRejected;
    }

    public function getDate() {
        return $this->date;
    }

    public function setIsRejected($isRejected) {
        $this->isRejected = $isRejected;
    }

    public function setDate($date) {
        $this->date = $date;
    }


    
    
    
}
