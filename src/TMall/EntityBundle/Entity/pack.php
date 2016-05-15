<?php

namespace TMall\EntityBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Iphp\FileStoreBundle\Mapping\Annotation as FileStore;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * pack
 *
 * @ORM\Table()
 * @FileStore\Uploadable
 * @ORM\Entity()
 */
class pack
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
     * @ORM\Column(type="array")
     * @Assert\File( maxSize="20M")
     * @FileStore\UploadableField(mapping="photo")
     * 
     */
    private $photo;
      

    

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
    
    
}


