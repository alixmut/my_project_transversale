<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movietypes
 *
 * @ORM\Table(name="movietypes")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovietypesRepository")
 */
class Movietypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $movieid;



    /**
     * Set type
     *
     * @param string $type
     * @return Movietypes
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get movieid
     *
     * @return integer 
     */
    public function getMovieid()
    {
        return $this->movieid;
    }
}
