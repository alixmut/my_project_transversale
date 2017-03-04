<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviesRepository")
 */
class Movies
{
    /**
     * @var string
     *
     * @ORM\Column(name="TitleMovieLens", type="string", length=100, nullable=true)
     */
    private $titlemovielens;

    /**
     * @var string
     *
     * @ORM\Column(name="TitleImdb", type="string", length=250, nullable=true)
     */
    private $titleimdb;

    /**
     * @var string
     *
     * @ORM\Column(name="MovieId", type="decimal")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $movieid;



    /**
     * Set titlemovielens
     *
     * @param string $titlemovielens
     * @return Movies
     */
    public function setTitlemovielens($titlemovielens)
    {
        $this->titlemovielens = $titlemovielens;

        return $this;
    }

    /**
     * Get titlemovielens
     *
     * @return string 
     */
    public function getTitlemovielens()
    {
        return $this->titlemovielens;
    }

    /**
     * Set titleimdb
     *
     * @param string $titleimdb
     * @return Movies
     */
    public function setTitleimdb($titleimdb)
    {
        $this->titleimdb = $titleimdb;

        return $this;
    }

    /**
     * Get titleimdb
     *
     * @return string 
     */
    public function getTitleimdb()
    {
        return $this->titleimdb;
    }

    /**
     * Get movieid
     *
     * @return string 
     */
    public function getMovieid()
    {
        return $this->movieid;
    }
}
