<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moviedirectors
 *
 * @ORM\Table(name="moviedirectors")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviedirectorsRepository")
 */
class Moviedirectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="DirectorAlias", type="string", length=40, nullable=false)
     */
    private $directoralias;

    /**
     * @var string
     *
     * @ORM\Column(name="DirectorInfo", type="string", length=70, nullable=false)
     */
    private $directorinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieid;

    /**
     * @var string
     *
     * @ORM\Column(name="Director", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $director;



    /**
     * Set directoralias
     *
     * @param string $directoralias
     * @return Moviedirectors
     */
    public function setDirectoralias($directoralias)
    {
        $this->directoralias = $directoralias;

        return $this;
    }

    /**
     * Get directoralias
     *
     * @return string 
     */
    public function getDirectoralias()
    {
        return $this->directoralias;
    }

    /**
     * Set directorinfo
     *
     * @param string $directorinfo
     * @return Moviedirectors
     */
    public function setDirectorinfo($directorinfo)
    {
        $this->directorinfo = $directorinfo;

        return $this;
    }

    /**
     * Get directorinfo
     *
     * @return string 
     */
    public function getDirectorinfo()
    {
        return $this->directorinfo;
    }

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Moviedirectors
     */
    public function setMovieid($movieid)
    {
        $this->movieid = $movieid;

        return $this;
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

    /**
     * Set director
     *
     * @param string $director
     * @return Moviedirectors
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }
}
