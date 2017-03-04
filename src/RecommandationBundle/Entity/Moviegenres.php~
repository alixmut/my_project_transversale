<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moviegenres
 *
 * @ORM\Table(name="moviegenres")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviegenresRepository")
 */
class Moviegenres
{
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
     * @ORM\Column(name="Genre", type="string", length=12)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genre;



    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Moviegenres
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
     * Set genre
     *
     * @param string $genre
     * @return Moviegenres
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
