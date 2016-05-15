<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * boutique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\boutiqueRepository")
 */
class boutique
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
     * @ORM\Column(name="id_U", type="integer")
     * @ORM\ManyToOne(targetEntity="TMall\EntityBundle\Entity\Utilisateur")
     * 
     */
    
    private $idU;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cordonne", type="string", length=255)
     */
    private $cordonne;

   /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="produit", mappedBy="boutique")
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
     * @return boutique
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

    /**
     * Set cordonne
     *
     * @param string $cordonne
     * @return boutique
     */
    public function setCordonne($cordonne)
    {
        $this->cordonne = $cordonne;

        return $this;
    }

    /**
     * Get cordonne
     *
     * @return string 
     */
    public function getCordonne()
    {
        return $this->cordonne;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return boutique
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setId($id) {
        $this->id = $id;
    }

 public function getWebPath()
    {
        return null === $this->photo ? null : $this->getUploadDir().'/'.$this->photo;
    }
    
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/brochures';
    }
  
    /**
     * Override __toString() method to return the nom of the boutique
     * @return mixed
     */
    public function __toString()
    {
       return $this->nom;
    } 
    
     /**
     * Set idU
     *
     * @param integer $idU
     * @return boutique
     */
    public function setIdU($idU)
    {
        $this->idU = $idU;

        return $this;
    }

    /**
     * Get idU
     *
     * @return integer 
     */
    public function getIdU()
    {
        return $this->idU;
    }
    
}
