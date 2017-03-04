<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movierunningtimes
 *
 * @ORM\Table(name="movierunningtimes")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovierunningtimesRepository")
 */
class Movierunningtimes
{
    /**
     * @var float
     *
     * @ORM\Column(name="Duration", type="float", precision=10, scale=0, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="RunningInfo", type="string", length=75, nullable=false)
     */
    private $runninginfo;

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
     * Set duration
     *
     * @param float $duration
     * @return Movierunningtimes
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return float 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set runninginfo
     *
     * @param string $runninginfo
     * @return Movierunningtimes
     */
    public function setRunninginfo($runninginfo)
    {
        $this->runninginfo = $runninginfo;

        return $this;
    }

    /**
     * Get runninginfo
     *
     * @return string 
     */
    public function getRunninginfo()
    {
        return $this->runninginfo;
    }

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Movierunningtimes
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
     * @return Movierunningtimes
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
