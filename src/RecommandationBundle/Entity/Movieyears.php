<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movieyears
 *
 * @ORM\Table(name="movieyears")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovieyearsRepository")
 */
class Movieyears
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
     * @var integer
     *
     * @ORM\Column(name="Year", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $year;



    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Movieyears
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
     * Set year
     *
     * @param integer $year
     * @return Movieyears
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }
}
