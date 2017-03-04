<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moviecountries
 *
 * @ORM\Table(name="moviecountries")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviecountriesRepository")
 */
class Moviecountries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Movieid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieid;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $country;



    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Moviecountries
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
     * Set country
     *
     * @param string $country
     * @return Moviecountries
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
