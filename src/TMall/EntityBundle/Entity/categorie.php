<?php

namespace TMall\EntityBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\categorieRepository")
 */
class categorie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="category")
     */
    protected $products;


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
     * Set nom
     *
     * @param string $nom
     * @return categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    /**
     * Override __toString() method to return the nom of the categorie
     * @return mixed
     */
    public function __toString()
    {
       return $this->nom;
    }
}
