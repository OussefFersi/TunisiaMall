<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * subscribers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\subscribersRepository")
 */
class subscribers
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
     * @ORM\ManyToOne(targetEntity="users")
     */
    private $idUser;

    /**
     * @var float
     *
     * @ORM\Column(name="min_prix", type="float")
     */
    private $minPrix;

    /**
     * @var float
     *
     * @ORM\Column(name="max_prix", type="float")
     */
    private $maxPrix;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer")
     */
    private $idCategorie;

    /**
     *
     * @ORM\ManyToOne(targetEntity="boutique")
     */
    private $idBoutique;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return subscribers
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
     * Set minPrix
     *
     * @param float $minPrix
     * @return subscribers
     */
    public function setMinPrix($minPrix)
    {
        $this->minPrix = $minPrix;

        return $this;
    }

    /**
     * Get minPrix
     *
     * @return float 
     */
    public function getMinPrix()
    {
        return $this->minPrix;
    }

    /**
     * Set maxPrix
     *
     * @param float $maxPrix
     * @return subscribers
     */
    public function setMaxPrix($maxPrix)
    {
        $this->maxPrix = $maxPrix;

        return $this;
    }

    /**
     * Get maxPrix
     *
     * @return float 
     */
    public function getMaxPrix()
    {
        return $this->maxPrix;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     * @return subscribers
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
    /**
     * Set idUser
     *
     * @param integer $idBoutique
     * @return produit
     */
    public function setidBoutique($idBoutique)
    {
        $this->idBoutique = $idBoutique;

        return $this;
    }

    /**
     * Get idBoutique
     *
     * @return integer 
     */
    public function getidBoutique()
    {
        return $this->ididBoutique;
    }
}
