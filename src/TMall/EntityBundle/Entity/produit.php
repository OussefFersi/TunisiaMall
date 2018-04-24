<?php

namespace TMall\EntityBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Iphp\FileStoreBundle\Mapping\Annotation as FileStore;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * produit
 *
 * @ORM\Table()
 * @FileStore\Uploadable
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\produitRepository")
 */
class produit
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
     * @ORM\ManyToOne(targetEntity="boutique", inversedBy="products")
     * @ORM\JoinColumn(name="idBoutique_id", referencedColumnName="id")
     */
     
    private $boutique;

   /**
     * @ORM\ManyToOne(targetEntity="categorie", inversedBy="products")
     * @ORM\JoinColumn(name="idCategory_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;
    
    
    
    
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=550)
     */
    private $description;

    /**
     * 
     * @ORM\Column(name="image", type="array")
     * @Assert\File( maxSize="20M")
     * @FileStore\UploadableField(mapping="photo")
     * 
     */
    private $photo;
      /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    

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
     * @param integer $boutique
     * @return produit
     */
    public function setBoutique($boutique)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return integer 
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    

    /**
     * Set titre
     *
     * @param string $titre
     * @return produit
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * @param array $photo
     * @return Photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }
    /**
     * @return array
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Set prix
     *
     * @param float $prix
     * @return Product
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
     /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set category
     *
     * @param \TMall\EntityBundle\Entity\categorie $category
     *
     * @return produit
     */
    public function setCategory(\TMall\EntityBundle\Entity\categorie $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \TMall\EntityBundle\Entity\categorie
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    
    
    
    
    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    
    
    
    /**
     * Set description
     *
     * @param string $description
     * @return produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
