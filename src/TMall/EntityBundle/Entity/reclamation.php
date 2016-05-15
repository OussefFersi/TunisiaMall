<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reclamation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\reclamationRepository")
 */
class reclamation
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
     * @ORM\ManyToOne(targetEntity="produit")
     */
    private $idProduit;


    /**
     *
     * @ORM\ManyToOne(targetEntity="users")
     */
    private $idUserTo;


    /**
     *
     * @ORM\ManyToOne(targetEntity="users")
     */
    private $idUserFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="text")
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set idProduit
     *
     * @param integer $idProduit
     * @return reclamation
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
     * Set idUserTo
     *
     * @param integer $idUserTo
     * @return reclamation
     */
    public function setIdUserTo($idUserTo)
    {
        $this->idUserTo = $idUserTo;

        return $this;
    }

    /**
     * Get idUserTo
     *
     * @return integer 
     */
    public function getIdUserTo()
    {
        return $this->idUserTo;
    }

    /**
     * Set idUserFrom
     *
     * @param integer $idUserFrom
     * @return reclamation
     */
    public function setIdUserFrom($idUserFrom)
    {
        $this->idUserFrom = $idUserFrom;

        return $this;
    }

    /**
     * Get idUserFrom
     *
     * @return integer 
     */
    public function getIdUserFrom()
    {
        return $this->idUserFrom;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return reclamation
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return reclamation
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
