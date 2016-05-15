<?php

namespace TMall\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carte_fidelite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TMall\EntityBundle\Entity\carte_fideliteRepository")
 */
class carte_fidelite
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
