<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moviereleasedates
 *
 * @ORM\Table(name="moviereleasedates")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviereleasedatesRepository")
 */
class Moviereleasedates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ReleaseYear", type="integer", nullable=false)
     */
    private $releaseyear;

    /**
     * @var string
     *
     * @ORM\Column(name="ReleaseInfo", type="string", length=90, nullable=false)
     */
    private $releaseinfo;

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
     * @ORM\Column(name="Country", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="ReleaseDate", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $releasedate;



    /**
     * Set releaseyear
     *
     * @param integer $releaseyear
     * @return Moviereleasedates
     */
    public function setReleaseyear($releaseyear)
    {
        $this->releaseyear = $releaseyear;

        return $this;
    }

    /**
     * Get releaseyear
     *
     * @return integer 
     */
    public function getReleaseyear()
    {
        return $this->releaseyear;
    }

    /**
     * Set releaseinfo
     *
     * @param string $releaseinfo
     * @return Moviereleasedates
     */
    public function setReleaseinfo($releaseinfo)
    {
        $this->releaseinfo = $releaseinfo;

        return $this;
    }

    /**
     * Get releaseinfo
     *
     * @return string 
     */
    public function getReleaseinfo()
    {
        return $this->releaseinfo;
    }

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Moviereleasedates
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
     * @return Moviereleasedates
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

    /**
     * Set releasedate
     *
     * @param string $releasedate
     * @return Moviereleasedates
     */
    public function setReleasedate($releasedate)
    {
        $this->releasedate = $releasedate;

        return $this;
    }

    /**
     * Get releasedate
     *
     * @return string 
     */
    public function getReleasedate()
    {
        return $this->releasedate;
    }
}
